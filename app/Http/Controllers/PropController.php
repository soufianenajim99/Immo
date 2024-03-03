<?php

namespace App\Http\Controllers;

use App\Models\bien;
use Illuminate\Http\Request;

class PropController extends Controller
{
    public function index(){
        $biens = bien::all();
        return view('proprietaire.dashboard_prop',[
            'biens'=>$biens
        ]);
    }
}