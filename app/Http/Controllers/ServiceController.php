<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $services=Service::all();
     return view('Admin.Services.view',compact(['services']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Services.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:50000',
      ]);
      $imageName = time().'.'.$request->image->extension();
      $request->image->move(public_path('images'), $imageName);
      $service = new Service;
      $service->title=$request->title;
      $service->description=$request->description;
      $service->image=$imageName;
      $service->is_live=0;
      $service->save();
      return redirect('/admin/service/view')->with('status','Successfully added a Service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('Admin.Services.edit',compact(['service']));

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
       $service=Service::find($id);
       $service->title=$request->title;
       $service->description=$request->description;
       $service->save();
       return redirect('/admin/service/view')->with('status','Successfully Updated a Service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service= Service::find($id);
        $imageName='images/'.$service->image;
        File::delete($imageName);
        $service->delete();
        return redirect('/admin/service/view')->with('status','Successfully Deleted a Service');
    }
    public function toggleLiveServices($id){
        $ser=Service::find($id);
        $ser->is_live=!($ser->is_live);
        $ser->save();
        if($ser->is_live==0)
        {   return redirect()->back()->with('status','Successfully made it unlive');
        }else{
            return redirect()->back()->with('status','Successfully made it live');
        }
     }
}
