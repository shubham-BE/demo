<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('welcome',[
            'tasks' => [
                'GO to the store',
                'Go to the market',
                'Go to work',
            ]
        ]);
    } public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
