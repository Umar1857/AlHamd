<?php

namespace App\Http\Controllers;

use App\Item;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
            'image' => 'required|image|mimes:jpeg,bmp,png',
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

            $file = $request->file('image') ;

            $fileName       = time().'.'.$file->getClientOriginalExtension() ;
            $request->image->move(base_path('public/images/service'), $fileName);
            $service->image = $fileName;
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
            'name'          => 'required|string',
            'image'         => 'image|mimes:jpeg,bmp,png',
            'description'   => 'required|string',
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

            if ($request->hasFile('image')) {
                $file = $request->file('image');

                $fileName = time().'.' . $file->getClientOriginalExtension();
                $request->image->move(base_path('public/images/service'), $fileName);
                $service->image = $fileName;
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

//        Delete Image before deleting service
        $image_path = public_path('/images/service/'.$service->image);

        if(File::exists($image_path)) {
            @unlink($image_path);
        }

        $service->delete();
        // redirect
        Session::flash('message', 'Service has been Successfully Deleted!');
        Session::flash('alert-class', 'alert-success');
        return Redirect::to('/admin/service');
    }

    public function getServiceItems() {
        $items = Item::where('service_id', $_GET['serviceID'])->get();
        $html = '';
        $html .= "<div class=\"form-group\" id=\"item"."\">
                            <label for=\"items\">Select Size</label>";
        $html .= '<select class="form-control fields" name="item'.'" value="{{ old(\'item\') }}">
                                <option value="">Select A Size</option>';
        foreach ($items as $item) {
            $html .= "<option value='$item->id' {{ old(\"item\") == $item->id ? \"selected\":\"\"}} >$item->name</option>";
        }
        $html .='</select>';
        /*$html .= "@if
                    ($errors->has('services'))
                        <span class=\"help-block\">
                            <strong>{{ $errors->first('services') }}</strong>
                        </span>
                @endif";*/
        $html .= '</div>';

        echo $html;
    }

    public function getServices() {
        $services = Service::all();

        return view('/user/services', compact('services'));
    }

    public function getSingleService($id, $name) {
        $service = Service::find($id);
        return view('user/service-detail', compact('service'));
    }
}
