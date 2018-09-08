<?php

namespace App\Http\Controllers;

use App\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faqs::all();
        return view('admin/faqs/index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/faqs/create');
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
            'question' => 'required|string',
            'answer' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/faqs/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $faq = new Faqs();
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->save();

            // redirect
            Session::flash('message', 'An FAQ Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/faqs');
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
        $faq = Faqs::find($id);
        return view('/admin/faqs/show', compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faqs::find($id);

        return view('/admin/faqs/edit', ['faq' => $faq]);
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
            'question' => 'required|string',
            'answer' => 'required|string',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/faqs/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $faq = Faqs::find($id);
            $faq->question = $request->question;
            $faq->answer = $request->answer;

            $faq->update();

            // redirect
            Session::flash('message', 'An FAQ Has Been Successfully Updated!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/faqs');
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
        $faq = Faqs::find($id);
        $faq->delete();
        // redirect
        Session::flash('message', 'An FAQ has been Successfully Deleted!');
        Session::flash('alert-class', 'alert-success');
        return Redirect::to('/admin/faqs');
    }

    public function getFaqs() {
        $faqs = Faqs::orderBy('created_at', 'desc')->get();

        return view('user/faqs', compact('faqs'));
    }

}
