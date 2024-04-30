<?php

namespace App\Http\Controllers;

use App\Models\Asrama;
use Illuminate\Http\Request;


class AsramaController extends Controller
{
    public function index(){
        $asrama = Asrama::all();
        return view('asrama', ['asrama' => $asrama]);
    }
}
