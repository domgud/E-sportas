<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomandaController extends Controller
{
    public function index()
    {
        return view('komanda');
    }
}
