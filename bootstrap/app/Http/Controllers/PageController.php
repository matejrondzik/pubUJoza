<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('Frontend.home');
    }

    public function about()
    {
        return view('Frontend.pages.about');
    }

    public function documents()
    {
        return view('Frontend.pages.documents');
    }

    public function contacts()
    {
        return view('Frontend.pages.contacts');
    }

    public function interest()
    {
        return view('Frontend.pages.interest');
    }

    public function client()
    {
        return view('Frontend.pages.toBeClient');
    }
}
