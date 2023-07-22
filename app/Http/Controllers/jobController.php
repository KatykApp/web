<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobController extends Controller
{
    // Definimos un metodo

    public function __invoke() {
        return view('job-landing');
    }
}
