<?php

namespace App\Http\Controllers;

use App\Models\GaleriSmartClass;
use Illuminate\Http\Request;


class SmartClassController extends Controller
{
    public function index(){
        $smartclass = GaleriSmartClass::all();
        return view('smartclass', ['smartclass' => $smartclass]);
    }
}
