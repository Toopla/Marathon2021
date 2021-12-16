<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){
        $serie=Serie::all();
        return view('liste',['séries'=>$serie]);
    }


    public function rechercheGenre($genre){
        $tab=[];
        $serie=Serie::where('genre',$genre)
                ->orderBy('nom')
                ->get();
        foreach ($serie as $series)
            $tab[]=[$series->id,$series->nom,$series->urlImage];
        return json_encode($tab);}

    public function cinqSeries(){
        $serie=Serie::select('id','urlImage')
        -> orderBy('note','desc')
        -> take(5)
        -> get();
        return view('welcome',['series'=>$serie]);
    }

    public function rechercheNom($nom){
        $tab=[];
        $recherche=$nom;
        $serie=Serie::where('nom',$recherche)
            ->orderBy('nom')
            ->get();
        foreach ($serie as $series)
            $tab[]=[$series->id,$series->nom,$series->urlImage,];
        return json_encode($tab);
    }

    
}
