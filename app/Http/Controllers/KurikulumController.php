<?php

namespace App\Http\Controllers;
use App\Models\Kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index(){
        $kurikulum = Kurikulum::all();
        return view('kurikulum', ['kurikulum' => $kurikulum]);
    }
}
