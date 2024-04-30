<?php

namespace App\Http\Controllers;

use App\Models\MrClub;
use Illuminate\Http\Request;


class MrClubController extends Controller
{
    public function index(){
        $mrclub = MrClub::all();
        return view('mrclub', ['mrclub' => $mrclub]);
    }
}
