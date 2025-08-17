<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact Us - Online Store';
        $viewData['subtitle'] = 'Get in touch with us';
        $viewData['email'] = 'example@gmail.com';
        $viewData['phone'] = '300-123-4567';
        $viewData['address'] = 'Some Street 123, City, Country';
        $viewData['author'] = 'Developed by: Pablo Cabrejos';

        return view('home.contact')->with('viewData', $viewData);
    }
}
