<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();

        return view('admin/customer/index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Form DATA
        $rules = array(
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/customers/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $customer = new Customer();

            $customer->fname = $request->fname;
            $customer->lname = $request->lname;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->city = $request->city;

            $customer->save();

            // redirect
            Session::flash('message', 'A Customer Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/customers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);

        return view('admin/customer/edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate Form DATA
        $rules = array(
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/customers/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $customer = Customer::find($id);

            $customer->fname = $request->fname;
            $customer->lname = $request->lname;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->address = $request->address;
            $customer->city = $request->city;

            $customer->update();

            // redirect
            Session::flash('message', 'A Customer Has Been Successfully Updated!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/customers');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        // redirect
        Session::flash('message', 'A Customer Has Been Successfully Deleted');
        Session::flash('alert-class', 'alert-success');
        return Redirect::to('/admin/customers/');
    }
}
