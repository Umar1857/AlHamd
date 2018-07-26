<?php

namespace App\Http\Controllers;

use App\City;
use App\Events\QuoteQueryEvent;
use App\Mail\queryReply;
use App\Quote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    public function index() {
        $cities = City::all();
        return view('user/quote', compact('cities'));
    }

    public function create(Request $request){

        $rules = array(
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string',
            'from' => 'required|string',
            'to' => 'required|string',
            'message' => 'required|string'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/quote')
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $quote = new Quote();
            $quote->name = $request->username;
            $quote->email = $request->email;
            $quote->contact_no = $request->phone;
            $quote->moving_from = $request->from;
            $quote->moving_to = $request->to;
            $quote->message = $request->message;
            $quote->save();

            //Fire An Event
            event(new QuoteQueryEvent($quote));

            // redirect
            Session::flash('message', 'Your Quote Request Has Been Sent Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/quote');
        }
    }

    public function quotes(){
        $quotes = Quote::with('from','to')->get();
        return view('admin/quote/index', compact('quotes'));
    }

    public function show ($id){
        $quote = Quote::find($id);
        return view('admin/quote/view', compact('quote'));
    }

    public function sendReply(Request $request) {
        $rules = array(
            'subject' => 'required|string',
            'reply' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/quote/'.$request->quoteID)
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $quote = Quote::find($request->quoteID);
            $dataMail = [
                'subject'   =>  $request->subject,
                'view'      =>  'emails.quoteMail',
                'quote'     =>  $quote,
                'msg'       =>  $request->reply,
            ];
            Mail::to($quote->email)->later(Carbon::now()->addMinutes(1), (new queryReply($dataMail))->onQueue('emails'));

            // redirect
            Session::flash('message', 'Your Reply Has Been Sent Successfully!');
            Session::flash('alert-class', 'alert-success');
            return view('admin/quote/view', compact('quote'));
        }
    }
}
