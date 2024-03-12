<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Single Action Controller
    public function __invoke()
    {
        return view('home');
    }
}