<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:donor');
    }

    public function index(){
        return view('home');
    }
}
