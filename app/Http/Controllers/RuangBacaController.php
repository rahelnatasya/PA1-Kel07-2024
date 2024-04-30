<?php

namespace App\Http\Controllers;

use App\Models\GaleriRuangBaca;
use Illuminate\Http\Request;

class RuangBacaController extends Controller
{
    public function index(){
        $ruangbaca = GaleriRuangBaca::all();
        return view('ruangbaca', ['ruangbaca' => $ruangbaca]);
    }
}
