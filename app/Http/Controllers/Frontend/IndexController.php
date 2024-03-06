<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlider;
class IndexController extends Controller
{
  public function ContactUs(){
    return view('frontend.contact_us.contact');
  }
}
