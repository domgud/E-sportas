<?php

namespace App\Http\Controllers;

use App\Models\Treneris;
use Illuminate\Http\Request;

class TrenerisController extends Controller
{
    public function index()
    {
        $allTreneriai = Treneris::all();
        return view ('treneris', compact('allTreneriai'));
    }
}
