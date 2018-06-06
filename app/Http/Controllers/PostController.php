<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin/posts/index' , ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/posts/create');
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
            'title' => 'required|string',
            'body' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/post/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $post = new Post();
            $post->title = $request->title;
            $post->slug = str_slug($request->title);
            $post->body = $request->body;
            $post->image = $request->image;
            $post->save();

            // redirect
            Session::flash('message', 'A Post Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/post/create');
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
        $post = Post::find($id);

        return view('posts/edit', ['post' => $post]);
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
            'title' => 'required|string',
            'body' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/post/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $post = Post::find($id);
            $post->title = $request->title;
            $post->slug = str_slug($request->title);
            $post->body = $request->body;
            $post->image = $request->image;
            $post->update();

            // redirect
            Session::flash('message', 'A Post Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/post');
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
        $post = Post::find($id);
        $post->delete();
        // redirect
        Session::flash('message', 'Post has been Successfully Deleted!');
        Session::flash('alert-class', 'alert-success');
        return Redirect::to('/admin/post');
    }
}
