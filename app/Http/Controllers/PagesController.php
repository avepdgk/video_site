<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        $header = 'to jest nagłówek strony kontakt';
        $date = '20/08';
        $visited = 2019;
        return view('pages.contact', compact('header', 'date','visited'));
    }
    public function about()
    {
        return view('pages.about');
        
    }
}

