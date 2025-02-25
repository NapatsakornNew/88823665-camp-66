<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(){
        return view('home');
    }

    function __construct()
    {
        $user = session()->get('user');

    }
}
