<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DonorLoginController extends Controller
{
//    use AuthenticatesUsers;
//    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest:donor')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.donor.login');
    }

}
