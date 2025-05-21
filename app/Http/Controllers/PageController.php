<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Employee;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        $employees = Employee::all();
        return view('frontend.pages.about', compact('employees'));
    }

    public function documents()
    {
        $documents = Document::all();
        return view('frontend.pages.documents', compact('documents'));
    }

    public function contacts()
    {
        return view('frontend.pages.contacts');
    }

    public function interest()
    {
        return view('frontend.pages.interest');
    }

    public function client()
    {
        return view('frontend.pages.toBeClient');
    }

    public function trader()
    {
        return view('frontend.pages.toBeTrader');
    }

    public function consulting()
    {
        return view('frontend.pages.consultingActivity');
    }

    public function waste()
    {
        return view('frontend.pages.wasteExport');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function articleblog()
    {
        return view('frontend.pages.articleblog');
    }

}
