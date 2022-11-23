<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getContact()
    {
        return view('Frontend.Pages.contact');
    }

    public function getAbout()
    {
        return view('Frontend.Pages.about');
    }
}
