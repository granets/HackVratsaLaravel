<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller {

    public function index()
    {
        return view('home');
    }

    public function hackathons()
    {
        return view('hackathons');
    }

    public function faq()
    {
        return view('faq');
    }

    public function code4tech()
    {
        return view('code4tech');
    }

    public function program()
    {
        return view('program');
    }
}
