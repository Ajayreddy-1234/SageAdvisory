<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Textchanger;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $services=Service::all()->where('is_live',1);
        $header2=Textchanger::where('name','header2')->first();
        $mainheading2=Textchanger::where('name','mainheading2')->first();
        $mainheading1=Textchanger::where('name','mainheading1')->first();
        $inno1=Textchanger::where('name','inno1')->first();
        $inno2=Textchanger::where('name','inno2')->first();
        $footer2=Textchanger::where('name','footer2')->first();
        $testimonial1=Textchanger::where('name','testimonial1')->first();
        $testimonial2=Textchanger::where('name','testimonial2')->first();
        $req1=Textchanger::where('name','req1')->first();
        $req2=Textchanger::where('name','req2')->first();
        return view('user.home',compact(['services','header2','mainheading2','mainheading1','inno1','inno2','footer2',
        'testimonial1','testimonial2','req1','req2']));
    }

    public function service($id)
    {

        $service = Service::find($id);

        if(is_null($service)||$service->is_live==0)
        {  
           return redirect('/services');
        }
        
      //  $service = $linkify->process($service);
        return view('user.service',compact(['service']));
    }

    public function services()
    {
        $services=Service::all()->where('is_live',1);
        $req1=Textchanger::where('name','req1')->first();
        $req2=Textchanger::where('name','req2')->first();
        return view('user.services',compact(['services','req1','req2']));
    }

    public function solutions()
    {   $solutions=Textchanger::where('name','solutions')->first();
        $req1=Textchanger::where('name','req1')->first();
        $req2=Textchanger::where('name','req2')->first();
        return view('user.solutions',compact('solutions','req1','req2'));
    }
    
    public function aboutus()
    {   $aboutus=Textchanger::where("name","aboutus")->first();
        $req1=Textchanger::where('name','req1')->first();
        $req2=Textchanger::where('name','req2')->first();
        return view('user.aboutus',compact(['aboutus','req1','req2']));
    }

    public function contactus()
    {
        return view('user.contactus');
    }

}
