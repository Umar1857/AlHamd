<?php

namespace App\Http\Controllers;

use App\Item;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::with('service')->get();
        return view('admin/items/index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::all();
        return view('admin/items/create',compact('services'));
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
            'service'   => 'required',
            'name'      => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/item/create')
                ->withErrors($validator)
                ->withInput();
        } else {

            $item = new Item();
            $item->name         = $request->name;
            $item->service_id   = $request->service;
            $item->save();

            // redirect
            Session::flash('message', 'An Item Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/item/create');

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
        $item = Item::find($id);
        $services = Service::all();
        return view('admin/items/edit', compact('item','services'));
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
            'service'   => 'required',
            'name'      => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/item/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        } else {

            $item = Item::find($id);
            $item->name         = $request->name;
            $item->service_id   = $request->service;
            $item->update();

            // redirect
            Session::flash('message', 'An Item Has Been Successfully Updated!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/item/');
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
        $item = Item::find($id);
        $item->delete();
        // redirect
        Session::flash('message', 'Item has been Successfully Deleted!');
        Session::flash('alert-class', 'alert-success');
        return Redirect::to('/admin/item');
    }
}
