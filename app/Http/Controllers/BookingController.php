<?php

namespace App\Http\Controllers;

use App\Booking;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index() {
        $cities = City::all();
        return view('user/booking', compact('cities'));
    }

    public function create(Request $request){

        $rules = array(
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|regex:/(0)[0-9]{10}/',
            'from' => 'required|string',
            'to' => 'required|string',
            'message' => 'required|string'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/booking')
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $booking = new Booking();
            $booking->name = $request->username;
            $booking->email = $request->email;
            $booking->contact_no = $request->phone;
            $booking->moving_from = $request->from;
            $booking->moving_to = $request->to;
            $booking->message = $request->message;
            $booking->save();

            // redirect
            Session::flash('message', 'Booking Request Has Been Sent Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/booking');
        }
    }

    public function bookings() {
        $bookings = Booking::all();

        return view('/admin/booking/index', compact('bookings'));
    }

    public function show($id) {
        $booking = Booking::find($id);

        return view('/admin/booking/view', compact('booking'));
    }

    public function sendReply() {

    }
}
