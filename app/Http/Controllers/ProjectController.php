<?php

namespace App\Http\Controllers;

use App\City;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\Validator;
use view;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('admin/project/create', compact('cities'));
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
            'title'            => 'required|string',
            'description'      => 'required|string',
            'moved_from'       => 'required',
            'moved_to'         => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/project/create')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $project = new Project();
            $project->title = $request->title;
            $project->description = $request->description;
            $project->from = $request->moved_from;
            $project->to = $request->moved_to;
            $project->save();

            // redirect
            Session::flash('message', 'A Project Has Been Successfully added to your Profile!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/project/create');
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
        $project = Project::find($id);
        $cities = City::all();

        return view('admin/project/edit', ['project' => $project, 'cities' => $cities]);
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
            'title'            => 'required|string',
            'description'      => 'required|string',
            'moved_from'       => 'required',
            'moved_to'         => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/project/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        else{

            $project = Project::find($id);
            $project->title = $request->title;
            $project->description = $request->description;
            $project->from = $request->moved_from;
            $project->to = $request->moved_to;
            $project->update();

            // redirect
            Session::flash('message', 'A Project Has Been Successfully Updated!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/project');
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
        $project = Project::find($id);
        $project->delete();
        // redirect
        Session::flash('message', 'Project has been Successfully Deleted!');
        Session::flash('alert-class', 'alert-success');
        return Redirect::to('/admin/project');
    }

    public function projects() {
        $projects = Project::all();
        return view('user.project', ['projects' => $projects]);
    }
}
