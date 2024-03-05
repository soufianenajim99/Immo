<?php

namespace App\Http\Controllers;

use App\Models\bien;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function bienPage(string $id){
        $bien = bien::findOrFail($id);
        return view('client.bien_page',[
            'bien'=>$bien
        ]);
    }

    public function reserve(string $id){
        $bien = bien::findOrFail($id);
        $cli = client::where('user_id',Auth::id())->first();
        $bien->client_id=$cli->id;
        $bien->save();
        return redirect('/');
    }
    public function myreserve(){
        $cli = client::where('user_id',Auth::id())->first();
        $biens = bien::where('client_id',$cli->id)->get();
        return view('client.myreser',[
            'biens'=>$biens
        ]);
    }


    public function annreserve(string $id){
        $bien = bien::findOrFail($id);
        $cli = client::where('user_id',Auth::id())->first();
        $bien->client_id=null;
        $bien->save();
        return redirect('/myreserve');
    }
   
}