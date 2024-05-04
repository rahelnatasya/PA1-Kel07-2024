<?php

namespace App\Http\Controllers;

use App\Models\GaleriRuang;
use Illuminate\Http\Request;

class RuangBacaController extends Controller
{
    public function index(){
        $ruangbaca = GaleriRuang::where('ruang', 'Ruang Baca')->get();
        return view('ruangbaca', ['ruangbaca' => $ruangbaca]);
    }
}
