<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class RegistrationfeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('registrationfee');
    }
    public function makepayment(Request $request)
    {        
        $userInfo = Auth::user();
        $userInfo->membership = $request->membership;
        $userInfo->save();
        return view('home');
    }
    public function skippayment()
    {
        return view('home');
    }
}
