<?php

namespace App\Http\Controllers;

use App\Models\GaleriRuangKelas;
use Illuminate\Http\Request;


class RuangKelasController extends Controller
{
    public function index(){
        $ruangkelas = GaleriRuangKelas::all();
        return view('ruangkelas', ['ruangkelas' => $ruangkelas]);
    }
}
