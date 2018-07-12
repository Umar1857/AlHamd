<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin/services/index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/services/create');
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
            'name' => 'required|string',
            'image' => 'required',
            'description' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/service/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            
            $service = new Service();
            $service->name = $request->name;
            $service->description = $request->description;
            $service->image = $request->image;
            $service->save();

            // redirect
            Session::flash('message', 'A Service Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/service/create');

            //OUTPUT IT WITH {!!html_entity_decode($text)!!}
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
        $service = Service::with('items')->find($id);
        return view('admin/services/show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin/services/edit', compact('service'));
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
            'name' => 'required|string',
            'description' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/service/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            //dd($request);
            $service = Service::find($id);
            $service->name = $request->name;
            $service->description = $request->description;
            if ($request->image) {
                $service->image = $request->image;
            }
            $service->update();

            // redirect
            Session::flash('message', 'A Service Has Been Successfully Updated!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/service');
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
        $service = Service::find($id);
        $service->delete();
        // redirect
        Session::flash('message', 'Service has been Successfully Deleted!');
        Session::flash('alert-class', 'alert-success');
        return Redirect::to('/admin/service');
    }
}
