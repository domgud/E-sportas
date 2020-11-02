<?php

namespace App\Http\Controllers;

use App\Models\Partneris;
use Illuminate\Http\Request;

class PartnerisController extends Controller
{

    public function index(){
        $allPartneriai = Partneris::all();
        return view ('partneris', compact('allPartneriai'));
    }

}
