<?php

namespace App\Http\Controllers;

use App\Models\savininkas;
use Illuminate\Http\Request;

class SavininkasController extends Controller
{
    public function index()
    {
        $allSavininkai = savininkas::all();
        return view ('savininkas', compact('allSavininkai'));
    }
}
