<?php

namespace App\Http\Controllers;

use App\Actualite;
use Image;
use Storage;
use App\Services\ImageManager;
use App;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function __construct(ImageManager $imageManager) {
        $this->imageManager = $imageManager;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actualites = Actualite::all();
        return view("admin.actualites.index",compact("actualites"));
    }

    /**
     * Show the form for creating a actualite resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.actualites.create");
    }

    /**
     * Store a actualitely created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actualite = new Actualite;
        $arg = [
            "request" =>$request->image,
            "disk2"=> "imageActualite",
            "x" => 194,
            "y" => 148,
        ];
        $actualite->titre = $request->titre;
        $actualite->description= $request->description;
        $actualite->image = $this->imageManager->imageStore($arg);
        if($actualite->save())
        {
            return redirect()->route("actualite.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actualite = Actualite::find($id);
        return view("admin.actualites.show", compact("actualite"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
        return view("admin.actualites.edit",compact("actualite"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        $arg = [
            "request" =>$request->image,
            "disk2"=> "imageActualite",
            "x" => 194,
            "y" => 148,
        ];
      $del =   [
            "imageName" => $actualite->image,
            "disk2" => "imageActualite",
      ];
      if($request->image != null)
      {
          $this->imageManager->imageDelete($del);
        $actualite->image =  $this->imageManager->imageStore($arg);
      }
      if($request->titre!= null)
      {
          $actualite->titre = $request->titre;

      }
      if($request->description != null)
      {
          $actualite->description = $request->description;
          
        
      }
      if($actualite->save())
      {
          return redirect()->route("actualite.index");
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return redirect()->route("actualite.index");
    }
}
