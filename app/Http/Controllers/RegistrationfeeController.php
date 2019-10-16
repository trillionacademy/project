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
        var_dump('registrationfee');
        exit();
        return view('registrationfee');
    }
}
