<?php

namespace App\Http\Controllers;

use App\Models\bien;
use App\Models\prop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'adresse' => 'required',
            'description' => 'required',
            'type' => 'required',
            'picture' => 'required',
        ]);
        $fileName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('images/biens'),$fileName);

        
        $prop = prop::where('user_id',Auth::id())->first();
        
        
        $validatedData=array_merge($validatedData,['prop_id'=>$prop->id,'client_id'=>null,'picture' => $fileName]);
        bien::create($validatedData);
        return redirect('/dashboard_pro');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bien= bien::findOrFail($id);
        return view("proprietaire.editer_prop",[
            'bien'=> $bien
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'adresse' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        $bien = bien::findOrFail($id);
        $bien->titre = strip_tags($request->input('titre'));
        $bien->adresse = strip_tags($request->input('adresse'));
        $bien->description = strip_tags($request->input('description'));
        $bien->type = strip_tags($request->input('type'));
        $bien->save();
        return redirect('/dashboard_pro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bien = bien::findOrFail($id);
        $bien->delete();
        return redirect('/dashboard_pro');
    }
}