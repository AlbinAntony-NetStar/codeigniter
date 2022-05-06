<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function about()
    {
        return view('about_message');
    }
    public function contact()
    {
        return view('contact_page');
    }
}
