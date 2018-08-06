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
            'image' => 'required|image|mimes:jpeg,bmp,png',
            'body'  => 'required|string',
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

            $file = $request->file('image') ;

            $fileName       = time().'.'.$file->getClientOriginalExtension() ;
            $request->image->move(base_path('public/images/post'), $fileName);
            $post->image = $fileName;
            $post->save();

            // redirect
            Session::flash('message', 'A Post Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/post');

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
        $post = Post::find($id);
        return view('user/blog-detail', compact('post'));
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

        return view('admin/posts/edit', ['post' => $post]);
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
            'image' => 'image|mimes:jpeg,bmp,png',
            'body'  => 'required|string',
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

            if ($request->hasFile('image')) {
                $file = $request->file('image');

                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $request->image->move(base_path('public/images/post'), $fileName);
                $post->image = $fileName;
            }
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

    public function blog() {
        $posts = Post::paginate(12);
        return view('user/blog', compact('posts'));
    }

    public function singlePost($id, $name)
    {
        $post = Post::find($id);
        return view('user/blog-detail', ['post' => $post]);
    }
}
