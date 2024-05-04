<?php

namespace App\Http\Controllers;

use App\Models\Laboratorium;
use Illuminate\Http\Request;


class LaboratoriumController extends Controller
{
    public function index(){
        $laboratorium = Laboratorium::all();
        return view('laboratorium', ['laboratorium' => $laboratorium]);
    }
}
