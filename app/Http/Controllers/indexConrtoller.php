<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexConrtoller extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about() {
        return view('aboutUs');
    }

    public function services() {
        return view('services');
    }
}
