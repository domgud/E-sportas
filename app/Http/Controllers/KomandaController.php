<?php

namespace App\Http\Controllers;

use App\Models\komanda;
use Illuminate\Http\Request;

class KomandaController extends Controller
{
    public function index()
    {
        $allKomandos = komanda::all();
        return view ('komanda', compact('allKomandos'));
    }
}
