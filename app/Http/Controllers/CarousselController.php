<?php

namespace App\Http\Controllers;

use App\Caroussel;
use Image;
use Storage;
use App\Services\ImageManager;
use App;
use Illuminate\Http\Request;

class CarousselController extends Controller
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
        $caroussels = Caroussel::all();
        return view("images.caroussels.index",compact("caroussels"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("images.caroussels.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $arg = [
            "request"=>$request->image,
            "disk2"=>"imageCaroussel",
            "x"=>1351,
            "y"=>562,
        ];
        $caroussel = new Caroussel;
        $caroussel->nom = $request->nom;
        $caroussel->image = $this->imageManager->imageStore($arg);
        $img = $caroussel->image;
        if($caroussel->save())
        {
            return redirect()->route("caroussel.index");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function show(Caroussel $caroussel)
    {
        return view("images.caroussels.show",compact("caroussel"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function edit(Caroussel $caroussel)
    {
        return view("images.caroussels.edit",compact("caroussel"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caroussel $caroussel)
    {
       $del =   [
                "imageName" => $caroussel->image,
                "disk2" => "imageCaroussel",
          ];
          $arg = [
            "request"=>$request->image,
            "disk2"=>"imageCaroussel",
            "x"=>1351,
            "y"=>562,
        ];
        if($request->image != null)
        {
            $caroussel->image = $this->imageManager->imageStore($arg);
        }
        if($request->nom != null)
        {
            $caroussel->nom = $request->nom;
        }
        if($caroussel->save())
        {
            return redirect()->route("caroussel.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caroussel $caroussel)
    {
        $del =   [
            "imageName" => $caroussel->image,
            "disk2" => "imageCaroussel",
      ];
      $caroussel->delete();
      return redirect()->route("caroussel.index");
    }
}
