<?php

namespace App\Http\Controllers;

use App\Activite;
use Image;
use Storage;
use App\Services\ImageManager;
use App;
use Illuminate\Http\Request;

class ActiviteController extends Controller
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
        $activites = Activite::all();
        return view("admin.activites.index",compact("activites"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.activites.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activite = new Activite;
        $arg = [
            "request" =>$request->image,
            "disk2"=> "imageActivite",
            "x" => 300,
            "y" => 216,
        ];
        $activite->nom = $request->nom;
        $activite->description = $request->description;
        $activite->image = $this->imageManager->imageStore($arg);
      
        if($activite->save())
        {
            return redirect()->route("activite.index");
        }
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(Activite $activite)
    {
        return view("admin.activites.show",compact("activite"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function edit(Activite $activite)
    {
        return view("admin.activites.edit",compact("activite"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activite $activite)
    {
        $del = [
            "imageName"=>$activite->image,
            "disk2"=>"imageActivite"
        ];
        $arg = [
            "request"=>$request->image,
            "disk2"=>"imageActivite",
            "x"=>300,
            "y"=>218,
        ];
        if($request->nom != null)
        {
            $activite->nom = $request->nom;
        }
        if($request->description != null)
        {
            $activite->description = $request->description;
        }
       
        if($request->image != null)
        {
            $this->imageManager->imageDelete($del);
            $activite->image = $this->imageManager->imageStore($arg);
          
        }
        if($activite->save())
        {
            return redirect()->route('activite.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activite $activite)
    {
        $del = [
            "imageName"=>$activite->image,
            "disk2"=>"imageActivite"
        ];
        $this->imageManager->imageDelete($del);
        $activite->delete();
        return redirect()->route("activite.index");
        
    }
}
