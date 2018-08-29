<?php

namespace App\Http\Controllers;

use App\Inscription;
use Illuminate\Http\Request;
use App\Team;
use App\Http\Requests\StoreInscription;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscriptions = Inscription::all();
        return view("admin.inscriptions.index",compact("inscriptions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view("admin.inscriptions.create",compact("teams"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInscription $request)
    {
        $inscription = new Inscription;
        // Variable  pour les old
        $nom = $request->old('nom');
        $mail = $request->old('mail');
        $phone = $request->old('phone');
        $message = $request->old('message');
        // Enregistrement des requête pour le formulaire d'inscription
        if($request->nom !=null)
        {
            $inscription->nom = $request->nom;
            
        }
        if($request->mail!=null)
        {
            $inscription->mail = $request->mail;
            
        }
        if($request->phone!=null)
        {
            $inscription->phone = $request->phone;
            
        }
       
        
        
        
        
       
        if($inscription->save())
        {
            return redirect()->route("inscription.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function show(Inscription $inscription)
    {
        return view("admin.inscriptions.show",compact("inscription"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscription $inscription)
    {
        $teams = Team::all();
        return view("admin.inscriptions.edit",compact("teams","inscription"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscription $inscription)
    {
        
        // Variable  pour les old
        $nom = $request->old('nom');
        $mail = $request->old('mail');
        $phone = $request->old('phone');
        $message = $request->old('message');
        // Enregistrement des requête pour le formulaire d'inscription
        if($request->nom !=null)
        {
            $inscription->nom = $request->nom;
            
        }
        if($request->mail!=null)
        {
            $inscription->mail = $request->mail;
            
        }
        if($request->phone!=null)
        {
            $inscription->phone = $request->phone;
            
        }
        if($request->message!=null)
        {
            $inscription->message = $request->message;
            
        }
        if($request->team_id!=null)
        {
            $inscription->team_id = $request->team;
            
        }
        
        
        
        
       
        if($inscription->save())
        {
            return redirect()->route("inscription.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inscription  $inscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        $inscription->delete();
        return redirect()->route("inscription.index");
    }
}
