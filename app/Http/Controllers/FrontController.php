<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caroussel;
class FrontController extends Controller
{
    public function accueil()
    {   
        $caroussels = Caroussel::all();
        return view("front.home.index",compact("caroussels"));
    }
}
