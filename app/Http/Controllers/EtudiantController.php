<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ville;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = DB::table('etudiants')->get();

        return view('etudiant', ['etudiants' => $etudiants]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('nouvelEtudiant', compact('villes'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    

    public function store(Request $request)
    {
        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->adresse = $request->input('adresse');
        $etudiant->phone = $request->input('phone');
        $etudiant->email = $request->input('email');
        $etudiant->date_naissance = $request->input('date_naissance');
        $etudiant->ville_id = $request->input('ville_id'); 

        $etudiant->save();

        return redirect()->route('etudiant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('unEtudiant', compact('etudiant'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiantEdit', compact('etudiant'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->email = $request->input('email');
        $etudiant->phone = $request->input('phone');
        $etudiant->adresse = $request->input('adresse');
        $etudiant->ville_id = $request->input('ville_id'); // add this line to update ville_id
        $etudiant->save();

        return redirect()->route('etudiant.show', $etudiant->id)->with('succès', 'Etudiant modifié avec succès');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        return redirect()->route('etudiant')
            ->with('succès', 'Etudiant supprimé avec succès');
    }
}
