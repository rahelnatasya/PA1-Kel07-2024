<?php

namespace App\Http\Controllers;

use App\Models\GaleriRuang;
use Illuminate\Http\Request;


class RuangSeminarController extends Controller
{
    public function index(){
        $ruangseminar = GaleriRuang::where('ruang', 'Ruang Seminar')->get();
        return view('ruangseminar', ['ruangseminar' => $ruangseminar]);
    }
}
