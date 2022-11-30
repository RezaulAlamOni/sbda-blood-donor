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
        $user = Auth::user();
        $user = User::where('id',$user->id)->with(['blood_group','v_area'])->first();
        return response()->json(['auth' => $user]);
    }
}
