<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        
        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            'title' => 'required|string|max:255',
            'caption' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/image/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $image = new Image();

            $image->title = $request->title;
            $image->caption = $request->caption;

            $file = $request->file('image') ;

            $fileName       = time().'.'.$file->getClientOriginalExtension() ;
            $request->image->move(base_path('public/images/gallery/media'), $fileName);
            $image->name = $fileName;

            $image->save();

            // redirect
            Session::flash('message', 'Image Has Been Successfully Added!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/image');
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
        $image = Image::find($id);

        return view('admin/gallery/show', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);

        return view('admin/gallery/edit', compact('image'));
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
            'title' => 'required|string|max:255',
            'caption' => 'required|string|max:255',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/image/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $image = Image::find($id);

            $image->title = $request->title;
            $image->caption = $request->caption;
            $image->update();

            // redirect
            Session::flash('message', 'Image Has Been Successfully Updated!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/image');
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
        $image = Image::find($id);

        $image_path = public_path('/images/gallery/media/'.$image->name);

        if(File::exists($image_path)) {
            @unlink($image_path);
        }

        $image->delete();

        // redirect
        Session::flash('message', 'Image Has Been Successfully Deleted!');
        Session::flash('alert-class', 'alert-success');
        return redirect('/admin/image');
    }

    public function gallery()
    {
        $images = Image::all();

        return view('/admin/gallery/view', compact('images'));
    }

    public function media()
    {
        $images = Image::all();

        return view('/user/gallery', compact('images'));
    }
}
