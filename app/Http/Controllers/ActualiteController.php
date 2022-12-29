<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::all();
        return view('admin.Actualites.index', compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Actualites.ajout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = Storage::disk('public')->put('photo_actualites', $request->photo);

        $actualiteInfos = [
            'titre' => $request->titre,
            'description' => $request->description,

            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'zone_intervention' => $request->zone_intervention,
            'photo' => $filename,
            'statut' => "nouveau",

        ];

        Actualite::create($actualiteInfos);
        return back()->with('success', 'Actualité ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        return view('admin.Actualites.edit', compact('actualite'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {


        $filename = " ";

        if($request->hasFile('photo')){
            Storage::disk('public')->delete($actualite->photo);
            $filename = Storage::disk('public')->put('photo_patenaires' ,$request->photo);
        }

        else{
            $filename = $actualite->photo;
        }

        $actualite->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'photo' => $filename,
            'zone_intervention' => $request->zone_intervention,

        ]);

        return redirect()->route('actualites.index')->with("success", "L'actualité a été mise à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return back()->with('success', 'Actualité supprimée avec succès');
    }
    public function getActualites(){
        $actualites = Actualite::all();
        return view('front.service', compact('actualites'));
    }
    public function detailActualite($id){

        $actualite = Actualite::find($id);

        if($actualite){
            return view('front.detail-actulaite', compact('actualite'));
        }
    }
}
