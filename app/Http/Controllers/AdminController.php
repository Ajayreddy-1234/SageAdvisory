<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Textchanger;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Cookie;


class AdminController extends Controller
{
    public function index(){
        $contacted=Contact::where('contacted',1)->count();
        $notcontacted=Contact::where('contacted',0)->count();
        $admins=User::all()->count();
        $services=Service::all()->count();
        $testimonials=Testimonial::all()->count();

        return view('dashboard',compact(['contacted','notcontacted','admins','services','testimonials']));
    }
    public function contact0(){
        $id=0;
        $contacts=Contact::all()->where('contacted',0);
        return view('Admin.Contactus.contact',compact(['contacts','id']));
    }
    public function contact1(){
        $id=1;
        $contacts=Contact::all()->where('contacted',1);
        return view('Admin.Contactus.contact',compact(['contacts','id']));
    }
    public function togglecontact($id){
        $contact=Contact::find($id);
        $contact->contacted=!($contact->contacted);
        $contact->save();
        return redirect()->back();
    }
    public function addtestimonial(){
      return view('Admin.Testimonials.add');
    }
    public function storetestimonial(Request $request){
      $testimonial = new Testimonial;
      $testimonial->name=$request->name;
      $testimonial->designation=$request->designation;
      $testimonial->description=$request->description;
      $testimonial->is_live=0;
      $testimonial->save();
      return redirect('/admin/testimonials/view')->with('status','Successfully added a Testimonial');
    }
    public function viewtestimonial(){
     $testimonials=Testimonial::all();
     return view('Admin.Testimonials.view',compact(['testimonials']));
    }
    public function edittestimonial($id){
     $testimonial=Testimonial::find($id);
     return view('Admin.Testimonials.edit',compact(['testimonial']));
    }
    public function updatetestimonial($id,Request $request){
        $testimonial=Testimonial::find($id);
        $testimonial->name=$request->name;
        $testimonial->designation=$request->designation;
        $testimonial->description=$request->description;
        $testimonial->save();
        return redirect('/admin/testimonials/view')->with('status','Successfully Updated a Testimonial');
    }
    public function destroytestimonial($id){
        $testimonial=Testimonial::find($id);
        $testimonial->delete();
        return redirect('/admin/testimonials/view')->with('status','Successfully Deleted a Testimonial');
    }
    public function login(){
        if(Session::has('SageAdvisoryLoggedAdmin')){
            return redirect('/admin');
        }
        if(Cookie::has('SageAdvisory'))
        {
           $str=Cookie::get('SageAdvisory');
           $user=User::where('remembercookie','=',$str)->first();
           if($user){
               Session::put('SageAdvisoryLoggedAdmin',$user->id);
               return redirect('/admin');
           }
        }
        return view('pages.auth.login');
    }
    public function register(){
        return view('pages.auth.register');
    }
    public function create(Request $request){
      $request->validate(
          [
              'name' => 'required',
              'email' => 'required|email|unique:users',
              'password' => 'required|min:5|max:12'
          ]
      );

      if($request->password!=$request->cpassword){
        return back()->with('fail','Passwords do not match');
        }
      $user = new User;
      $user->name = $request->name;
      $user->email= $request->email;
      $user->password = Hash::make($request->password);
      $str=Hash::make($request->name);
        $str1=Hash::make($request->email);
        $str2=Hash::make($str.$str1.$request->password);
        $user->remembercookie=$str2;
      $query = $user->save();


      if($query){
          return redirect('/viewAdmin')->with('status','You have Successfully added an Admin');
      }else{
          return back()->with('fail','Something went Wrong');
      }
    }
    public function validatelogin(Request $request){
        if(Session::has('SageAdvisoryLoggedAdmin')){
            return redirect('/admin');
        }
       $user= User::where('email','=',$request->email)->first();
       if($user){
          if(Hash::check($request->password,$user->password)){

            $request->session()->put('SageAdvisoryLoggedAdmin',$user->id);
            if(isset($request->rememberMe))
            {
                Cookie::queue(Cookie::make("SageAdvisory",$user->remembercookie,10080));
            }
            return redirect('/admin');
          }else{
              return back()->with('fail','Invalid Password');
          }
       }else{
           return back()->with('fail','No account found with this email');
       }
    }
    public function logout(){
        if(Session::has('SageAdvisoryLoggedAdmin')){
            Session::pull('SageAdvisoryLoggedAdmin');
            if(Cookie::has('SageAdvisory'))
            {
            Cookie::queue(Cookie::forget('SageAdvisory'));
            }
            return redirect('/adminLogin');
        }
    }
    public function viewadmins(){
        $admins=User::all();
        return view("Admin.Adminlist.viewadmin",compact(["admins"]));
    }
    public function toggleLiveTestimonials($id){
        $test=Testimonial::find($id);
        $test->is_live=!($test->is_live);
        $test->save();
        if($test->is_live==0)
        {   return redirect()->back()->with('status','Successfully made it unlive');
        }else{
            return redirect()->back()->with('status','Successfully made it live');
        }
     }
     public function storecontacts(Request $request){
       $request->validate([
           'name'=>'required',
           'email'=>'required|email',
           'Mobilenumber'=>'required|numeric',
           'message'=>'required'
       ]);
       $contact = new Contact;
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->number=$request->Mobilenumber;
       $contact->message=$request->message;
       $query=$contact->save();
       if($query){
         return redirect()->back()->with('status','We have Successfully received your request. we will contact you soon!!');
       }else{
          return redirect()->back()->with('fail','Oops!! Something is wrong. Please Try again Later');
       }


     }
     public function viewtextchangers(){
         $textchangers=Textchanger::all();
         return view('Admin.Textchangers.view',compact(['textchangers']));
     }
     public function edittextchangers($id){
       $textchanger=Textchanger::find($id);
         return view('Admin.Textchangers.edit',compact(['textchanger']));
    
     }
     public function updatetextchangers($id,Request $request){
         if(!$request->description){
             return redirect()->back()->with('fail','Cannot update to a null value');
         }
         $textchanger=Textchanger::find($id);
         $textchanger->value=$request->description;
         $query=$textchanger->save();
         if($query){
             return redirect('/admin/textchangers/view')->with('status',"successfully updated the textchanger");
         }else{
             return redirect()->back()->with('fail',"Oops!! Something went wrong. Please try again later");
         }
     }
}
