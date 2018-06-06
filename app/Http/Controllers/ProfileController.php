<?php

namespace App\Http\Controllers;

use App\Profile;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        // Validate Form DATA
        $rules = array(
            'email1' => 'required_without_all:email2,email3',
            'email2' => 'required_without_all:email1,email3',
            'email3' => 'required_without_all:email1,email2',
            'phone1' => 'required_without_all:phone2,phone3',
            'phone2' => 'required_without_all:phone1,phone3',
            'phone3' => 'required_without_all:phone1,phone2',
            'address' => 'required|string',
            'regularhour' => 'required|string',
            'weekendhour' => 'required|string'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/profile/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $profile = new Profile();
            $profile->email1 = $request->email1;
            $profile->email2 = $request->email2;
            $profile->email3 = $request->email3;
            $profile->phone1 = $request->phone1;
            $profile->phone2 = $request->phone2;
            $profile->phone3 = $request->phone3;
            $profile->address = $request->address;
            $profile->regular = $request->regularhour;
            $profile->weekend = $request->weekendhour;
            $profile->facebook = $request->facebook;
            $profile->twitter = $request->twitter;
            $profile->instagram = $request->instagram;
            $profile->linkedin = $request->linkedin;
            $profile->save();

            // redirect
            Session::flash('message', 'Your Profile Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/profile/create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profile()
    {
        return view('admin/profile');
    }
}
