<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $time = Carbon::now();
        session(['entryTime' => $time]);

        return view('/layouts/app');
    }
}
