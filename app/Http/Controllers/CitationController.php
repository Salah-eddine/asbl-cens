<?php

namespace App\Http\Controllers;

use App\Citation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCitation;
use App\Http\Requests\UpdateCitation; 


class CitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citations = Citation::all();
        return view("admin.citations.index",compact('citations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.citations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitation $request)
    {
        $auteur = $request->old('auteur');
        $citation = $request->old("citation");
        $citation = new Citation;
        $citation->auteur = $request->auteur;
        $citation->citation = $request->citation;
       if( $citation->save())
       {
           return redirect()->route("citation.index");
       }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function show(Citation $citation)
    {
        return view("admin.citations.show",compact("citation"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function edit(Citation $citation)
    {
        return view("admin.citations.edit",compact("citation"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCitation $request, Citation $citation)
    {
        $auteur = $request->old('auteur');
        
        if( $request->citation != null)
        {
            $citation->citation  = $request->citation;
        }
        $citation->auteur = $request->auteur;
        $citation->save();
        return redirect()->route("citation.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citation  $citation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citation $citation)
    {
        $citation->delete();
        return redirect()->route("citation.index");
    }
}
