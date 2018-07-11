<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\ContactQueryEvent;
use App\Mail\contactReply;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function create(Request $request){
        $rules = array(
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|regex:/(0)[0-9]{10}/',
            'message' => 'required|string'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/contact')
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $contact = new Contact();
            $contact->name = $request->username;
            $contact->email = $request->email;
            $contact->contact_no = $request->phone;
            $contact->message = $request->message;
            $contact->save();

            //Fire An Event
            event(new ContactQueryEvent($contact));

            // redirect
            Session::flash('message', 'Your Request Has Been Sent Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/contact');
        }
    }

    public function index() {
        $contacts = Contact::all();
        return view('admin/contact/index', compact('contacts'));
    }

    public function show($id){
        $contact = Contact::find($id);

        return view('admin/contact/view', compact('contact'));
    }

    public function sendReply(Request $request) {
        $rules = array(
            'subject' => 'required|string',
            'reply' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/contact/'.$request->contactID)
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $contact = Contact::find($request->contactID);

            $dataMail = [
                'subject'   =>  $request->subject,
                'view'      =>  'emails.contactMail',
                'contact'   =>  $contact,
                'msg'       =>  $request->reply,
            ];
            Mail::to($contact->email)->later(Carbon::now()->addMinutes(1), (new contactReply($dataMail))->onQueue('emails'));

            // redirect
            Session::flash('message', 'Your Reply Has Been Sent Successfully!');
            Session::flash('alert-class', 'alert-success');
            return view('admin/contact/view', compact('contact'));
        }
    }
}
