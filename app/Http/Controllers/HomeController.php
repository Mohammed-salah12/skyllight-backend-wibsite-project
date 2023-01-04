<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Main;
use App\Models\Partner;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $mains = Main::all();
        return view('website.index' ,compact('mains'));
    }
    public function about(){
        $abouts = About::all();
        return view('website.about' ,compact('abouts'));
    }
    public function contact(){
        $contacts = Contact::all();
        return view('website.contact-us' ,compact('contacts'));
    }
    public function gallery(){
        $galleries = Gallery::all();
        return view('website.gallery' ,compact('galleries'));
    }
    public function partners(){
        $partners = Partner::all();
        return view('website.partners' ,compact('partners'));
    }
    public function services(){
        $services = Service::all();
        return view('website.Services' ,compact('services'));
    }

}