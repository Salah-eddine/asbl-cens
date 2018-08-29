<?php

namespace App\Http\Controllers;

use App\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
        return view('admin.equipes.index',compact("equipes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.equipes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipe = new Equipe;
        // Variable  pour les old
        $nom = $request->old('nom');
        $mail = $request->old('mail');
        $rôle = $request->old('rôle');
        $prénom = $request->old('prénom');
        // Enregistrement des requête pour le formulaire d'equipe
        if($request->nom !=null)
        {
            $equipe->nom = $request->nom;
            
        }
        if($request->mail!=null)
        {
            $equipe->mail = $request->mail;
            
        }
        if($request->rôle!=null)
        {
            $equipe->rôle = $request->rôle;
            
        }
        if($request->prénom!=null)
        {
            $equipe->prénom = $request->prénom;
            
        }
        
        
        
        
       
        if($equipe->save())
        {
            return redirect()->route("staff.index");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipex = Equipe::find($id);
        return view("admin.equipes.show",compact("equipex"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipe = Equipe::find($id);
        return view("admin.equipes.edit",compact("equipe"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equipe = Equipe::find($id);
        
        // Variable  pour les old
        $nom = $request->old('nom');
        $mail = $request->old('mail');
        $rôle = $request->old('rôle');
        $prénom = $request->old('prénom');
        // Enregistrement des requête pour le formulaire d'equipe
        if($request->nom !=null)
        {
            $equipe->nom = $request->nom;
            
        }
        if($request->mail!=null)
        {
            $equipe->mail = $request->mail;
            
        }
        if($request->rôle!=null)
        {
            $equipe->rôle = $request->rôle;
            
        }
        if($request->prénom!=null)
        {
            $equipe->prénom = $request->prénom;
            
        }
        
        
        
        
       
        if($equipe->save())
        {
            return redirect()->route("staff.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipe = Equipe::find($id);
        $equipe->delete();
        return redirect()->route("staff.index");
    }
}
