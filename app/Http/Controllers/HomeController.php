<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Photo::where('type','slider')->get();
        return view('home',compact('sliders'));
    }

    public function Default_vue (){
        return view('layouts.master');
    }
}
