<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;


class TestimoniController extends Controller
{
    public function index(){
        $testimoni = Testimoni::all();
        return view('beranda', ['testimoni' => $testimoni]);
    }
}

