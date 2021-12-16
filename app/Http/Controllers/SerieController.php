<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Episode;
use App\Models\Serie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){
        $serie=Serie::all();
        $genre = Serie::Select('genre')
        ->groupBy('genre')
        ->get();

        return view('liste',['séries'=>$serie], ['genres' => $genre]);  

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

    public function detailSerie($id=73){
        $tab=[];
        $serie=Serie::where("id",$id)
            ->get();
        $commentaire=Comment::where("id",$id)
            ->get();
        $episode=Episode::where("serie_id",$id)
            ->get();

        return view('test',['series'=>$serie,'commentaires'=>$commentaire,'episodes'=>$episode]);
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

    public function rechercheNom($nom="Doctor Who"){
        $tab=[];
        $recherche=$nom;
        $serie=Serie::where('nom',$recherche)
            ->orderBy('nom')
            ->get();
        foreach ($serie as $series)
            $tab[]=[$series->id,$series->nom,$series->urlImage];
        return json_encode($tab);
    }

    public function detailSerie($id=73){
        $tab=[];
        $serie=Serie::where("id",$id)
            ->get();
        $commentaire=Comment::where("id",$id)
            ->get();
        $episode=Episode::where("serie_id",$id)
            ->get();

        return view('test',['series'=>$serie,'commentaires'=>$commentaire,'episodes'=>$episode]);
    }
}
