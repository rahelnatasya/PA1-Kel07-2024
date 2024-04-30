<?php

namespace App\Http\Controllers;

use App\Models\GaleriRuangSeminar;
use Illuminate\Http\Request;


class RuangSeminarController extends Controller
{
    public function index(){
        $ruangseminar = GaleriRuangSeminar::all();
        return view('ruangseminar', ['ruangseminar' => $ruangseminar]);
    }
}
