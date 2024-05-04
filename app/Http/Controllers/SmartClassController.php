<?php

namespace App\Http\Controllers;

use App\Models\GaleriRuang;
use Illuminate\Http\Request;


class SmartClassController extends Controller
{
    public function index(){
        $smartclass = GaleriRuang::where('ruang', 'Smart Room')->get();
        return view('smartclass', ['smartclass' => $smartclass]);
    }
}
