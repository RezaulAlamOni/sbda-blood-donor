<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('home');
    }

    public function authCheck() {
        return response()->json(['auth' => User::find(\auth()->id())->with(['blood_group','v_area'])->first()]);
    }
}
