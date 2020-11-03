<?php

namespace App\Http\Controllers;

use App\Models\Zaidejas;
use Illuminate\Http\Request;

class ZaidejasController extends Controller
{
    public function index()
    {
        $allZaidejai = Zaidejas::all();
        return view ('zaidejas', compact('allZaidejai'));
    }
}
