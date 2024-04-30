<?php

namespace App\Http\Controllers;

use App\Models\himamera;
use Illuminate\Http\Request;

class HimameraController extends Controller
{
    public function index(){
        $himamera = Himamera::all();
        return view('himamera', ['himamera' => $himamera]);
    }
}
