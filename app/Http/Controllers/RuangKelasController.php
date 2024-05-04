<?php

namespace App\Http\Controllers;

use App\Models\GaleriRuang;
use Illuminate\Http\Request;


class RuangKelasController extends Controller
{
    public function index(){
        $ruangkelas = GaleriRuang::where('ruang', 'Ruang Kelas')->get();
        return view('ruangkelas', ['ruangkelas' => $ruangkelas]);
    }
}
