<?php

namespace App\Http\Controllers;

use App\ImageAction;
use Image;
use Storage;
use App\Services\ImageManager;
use App;
use Illuminate\Http\Request;

class ImageActionController extends Controller
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
        $actions = ImageAction::all();
        return view("images/imageAction/index",compact("actions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("images.imageAction/create");
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
            "disk2"=>"imageAction",
            "x"=>600,
            "y"=>423,
        ];
        $action = new ImageAction;
        $action->image = $this->imageManager->imageStore($arg);
        $action->etiquette = $request->etiquette;
        if($action->save())
        {
            return redirect()->route("action.index");
        }
        else{
            return " marche pas ...";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImageAction  $imageAction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $action = ImageAction::find($id);
        return view("images.imageAction.show",compact("action"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImageAction  $imageAction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = ImageAction::find($id);
        return view("images.imageAction.edit",compact("action"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImageAction  $imageAction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $action = ImageAction::find($id);
        $del=[
            "imageName" => $action->image,
            "disk2" => "imageAction",
        ];
        $arg = [
            "request"=>$request->image,
            "disk2"=>"imageAction",
            "x"=>500,
            "y"=>323,
        ];
        if($request->image != null)
        {
            $this->imageManager->imageDelete($del);
            $action->image = $this->imageManager->imageStore($arg);
        }
        if($request->etiquette != null)
        {
            $action->etiquette = $request->etiquette;
        }
        if($action->save())
        {
            return redirect()->route("action.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImageAction  $imageAction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $action = ImageAction::find($id);
        if($action->delete())
        {
            return redirect()->route("action.index");
        }
    }
}
