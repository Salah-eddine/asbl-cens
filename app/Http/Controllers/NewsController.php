<?php

namespace App\Http\Controllers;

use App\News;
use Image;
use Storage;
use App\Services\ImageManager;
use App;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        $news = News::all();
        return view("admin.news.index",compact("news"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.news.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new News;
        $arg = [
            "request" =>$request->image,
            "disk2"=> "imageNews",
            "x" => 194,
            "y" => 148,
        ];
        $new->titre = $request->titre;
        $new->description= $request->description;
        $new->image = $this->imageManager->imageStore($arg);
        if($new->save())
        {
            return redirect()->route("new.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new =  News::find($id);
        return view("admin.news.show",compact("new"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
