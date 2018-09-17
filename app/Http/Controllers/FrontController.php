<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caroussel;
use App\ImageAction;
use App\Text;
use App\Actualite;
class FrontController extends Controller
{
    public function accueil()
    {   
        $caroussels = Caroussel::all();
        $father = ImageAction::where("etiquette","pere")->get()->first();
        $textMission = Text::where('nom','mission')->get()->first();
        $descAction = Text::where('nom','desc-action')->get()->first();
        $descActivite = Text::where('nom','desc-activite')->get()->first();
        $descAgenda  = Text::where('nom','desc-agenda')->get()->first();
        $latestNews = Actualite::paginate(5);

        return view("front.home.index",compact("caroussels","father","textMission",'descAction','descActivite','descAgenda','latestNews'));
    }
}
