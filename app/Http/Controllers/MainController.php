<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacyPolicy()
    {
        return view('legal.privacy-policy');
    }

    public function termsOfService()
    {
        return view('legal.terms-of-service');
    }
}
