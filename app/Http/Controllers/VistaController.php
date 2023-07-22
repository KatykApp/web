<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function jobLanding()
    {
        return view('job-landing');
    }
    public function authSigninBasic()
    {
        return view('auth-signin-basic');
    }
}
