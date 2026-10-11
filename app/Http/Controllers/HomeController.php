<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        // memanggil view landing page pada folder frontpage
        // disertai dengan variable title yang dapat ditampilkan pada layout
        return view('frontpage.landingpage', ['title' => "Landing Page"]);
    }

    public function promo()
    {
        return view('frontpage.promo', ['title' => "Promo"]);
    }

    public function about()
    {
        return view('frontpage.aboutpage', ['title' => "About"]);
    }

    public function contact()
    {
        return view('frontpage.contact', ['title' => "Contact"]);
    }

    public function booking()
    {
        return view('frontpage.bookingpage', ['title' => "Booking"]);
    }
}