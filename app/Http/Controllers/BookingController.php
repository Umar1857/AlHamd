<?php

namespace App\Http\Controllers;

use App\Booking;
use App\City;
use App\Events\BookingEvent;
use App\Events\ThankyouEvent;
use App\Mail\bookingReply;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index() {
        $cities = City::all();
        $services = Service::all();
        return view('user/booking', compact('cities','services'));
    }

    public function create(Request $request){
        $now = Carbon::now();
        //dd($request);
        $rules = array(
            'services'              => 'required|integer',
            'item'                  => 'required|integer',
            'from'                  => 'required|integer',
            'to'                    => 'required|integer',
            'from_address'          => 'required|string',
            'to_address'            => 'required|string',
            'moving_date'           => 'required|string|after:'.$now,
            'message'               => 'required|string',
            'fname'                 => 'required|string|max:255',
            'lname'                 => 'required|string|max:255',
            'email'                 => 'required|string|email|max:255',
            'phone'                 => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/booking')
                ->withErrors($validator)
                ->withInput();
        }

        else {
            //dd($request);
            $booking = new Booking();

            // Personal Details
            $booking->fname = $request->fname;
            $booking->lname = $request->lname;
            $booking->email = $request->email;
            $booking->number = $request->phone;

            // Delivery Details
            $booking->service = $request->services;
            $booking->item = $request->item;
            $booking->moving_from = $request->from;
            $booking->moving_to = $request->to;
            $booking->moving_from_address = $request->from_address;
            $booking->moving_to_address = $request->to_address;
            $booking->moving_date = Carbon::parse($request->moving_datetime)->format('Y-m-d');
            $booking->moving_time = Carbon::parse($request->moving_date)->format('H:i:s');
            $booking->description = $request->message;
            $booking->status = 'Pending';
            $booking->save();

            //Fire An Event to Notify Admins
            event(new BookingEvent($booking));

            //Fire An Event to Thankyou Customer
            event(new ThankyouEvent($booking));

            // redirect
            Session::flash('message', 'Booking Request Has Been Sent Successfully, our representative will contact you shortly!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/booking');
        }
    }

    public function pendingBookings() {
        $bookings = Booking::where('status','=','Pending')->get();
        $status = 'Pending';
        return view('/admin/booking/index', compact('bookings','status'));
    }
    public function completedBookings() {
        $bookings = Booking::where('status','=','Completed')->get();
        $status = 'Completed';
        return view('/admin/booking/index', compact('bookings','status'));
    }
    public function confirmedBookings() {
        $bookings = Booking::where('status','=','Confirmed')->get();
        $status = 'Confirmed';
        return view('/admin/booking/index', compact('bookings','status'));
    }

    public function show($id) {
        $booking = Booking::find($id);
        return view('/admin/booking/view', compact('booking'));
    }

    public function sendReply(Request $request) {

        $rules = array(
            'subject' => 'required|string',
            'reply' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect('/admin/booking/'.$request->bookingID)
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $booking = Booking::find($request->bookingID);
            $dataMail = [
                'subject'   =>  $request->subject,
                'view'      =>  'emails.bookingMail',
                'booking'     =>  $booking,
                'msg'       =>  $request->reply,
            ];
            Mail::to($booking->email)->later(Carbon::now()->addMinutes(1), (new bookingReply($dataMail))->onQueue('emails'));

            // redirect
            Session::flash('message', 'Your Reply Has Been Sent Successfully!');
            Session::flash('alert-class', 'alert-success');
            return view('admin/booking/view', compact('booking'));
        }
    }

    public function updateStatus(Request $request) {
        $rules = array(
            'status'    => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/booking/'.$request->id)
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $booking = Booking::find($request->id);
            $booking->status = $request->status;
            $booking->update();

            // redirect
            Session::flash('message', 'Booking Status Has Been Updated');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/booking/'.lcfirst($request->status));
        }
    }
}
