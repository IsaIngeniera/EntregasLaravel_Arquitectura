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
        $viewData['title'] = 'Contact - Online Store';
        $viewData['subtitle'] = 'Contact us';
        $viewData['Name'] = 'Author: Isabella Ocampo Sánchez';
        $viewData['Address'] = 'Address: Cll 28a 45b-41';
        $viewData['Phone'] = 'Phone: 3174860858';

        return view('home.contact')->with('viewData', $viewData);
    }

    public function about(): View
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is an about page ...';
        $viewData['author'] = 'Developed by: Isabella Ocampo Sánchez';

        return view('home.about')->with('viewData', $viewData);
    }
}
