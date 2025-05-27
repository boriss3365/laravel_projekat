<?php

namespace App\Http\Controllers;

use App\Models\PonudaMjeseca;

class HomeController extends Controller
{
    public function index()
    {
        $ponuda = PonudaMjeseca::all();
        return view('homepage', compact('ponuda'));
    }
}
