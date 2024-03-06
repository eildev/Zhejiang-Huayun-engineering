<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
use App\Models\Subscribe;
use App\Models\Contact;
use Carbon\Carbon;
class IndexController extends Controller
{
  public function ContactUs(){
    return view('frontend.contact_us.contact');
  }//

  public function Subscribe(Request $request){
    Subscribe::insert([
      'email' => $request->email,
      'created_at' => Carbon::now(),
    ]);
    $notification = array(
      'message' => 'Thank you for subscribing! Welcome to our community',
      'alert-type' => 'info'
  );
    return redirect()->back()->with($notification);
  }//
  public function SubscribeList(){
    $subscribe = Subscribe::all();
    return view('backend.subscribe.subscribe',compact('subscribe'));
  }//
  public function SubscribeDelete($id){
    Subscribe::findOrFail($id)->delete();
    $notification = array(
    'message' => 'Subscribe Successfully Deleted',
      'alert-type' => 'info'
    );
    return redirect()->back()->with($notification);
  }//
   public function ContactStore(Request $request){
    Contact::insert([
      'name' => request('name'),
      'email' => request('email'),
      'number' => request('phone'),
      'service_name' => request('service_name'),
      'company_name' => request('company_name'),
       'message' => request('message'),
       'created_at' => Carbon::now(),
    ]);
    $notification = array(
      'message' => 'Send Your Message Successfully',
        'alert-type' => 'info'
      );
      return redirect()->back()->with($notification);
  }//
  public function ContactList(){
    $contact = Contact::all();
    return view('backend.contact.contact_list',compact('contact'));
  }//
  public function ContactDelete($id){
    Contact::findOrFail($id)->delete();
    $notification = array(
   'message' => 'Contact Successfully Deleted',
      'alert-type' => 'info'
    );
    return redirect()->back()->with($notification);
  }//
}
