<?php

namespace App\Http\Controllers;
use App\Models\Profillulusan;
use Illuminate\Http\Request;

class ProfilLulusanController extends Controller
{
    public function index(){
        $profillulusan =Profillulusan::all();
        return view('profillulusan', ['profillulusan' => $profillulusan]);
    }
}
