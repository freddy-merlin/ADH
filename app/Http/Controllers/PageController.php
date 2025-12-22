<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function about()
    {
        return view('apropos');
    }

         public function services()
    {
        return view('apropos');
    }

         public function realisations()
    {
        return view('realisation');
    }

         public function contact()
    {
        return view('contact');
    }
}
