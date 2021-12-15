<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;

class UserController
{

    // Profil donne l'id, le nom , l'avatar et un tableau de commentaires le tout dans un tableau
    public function profil($id_user){
        $user = User::findOrFail($id_user);
        $nomUser = $user->name;
        $avatar = $user->avatar;
        $listComment=[];
        $comments = Comment::where('user_id',$id_user)->take(5)->get();
        foreach($comments as $com){
            if($com)
            $listComment[] = ["content" =>$com->content,
                                "note" =>$com->note,
                                "date" => $com->created_at];
        }

        $episodes = $user->seen;
        $series = [];

        foreach ($episodes as $episode){
            if(!in_array($episode->serie,$series)){
                $series[]=$episode->serie;
            }
        }

        $tab = ["id" =>$id_user,
            "nom"=>$nomUser,
            "avatar" => $avatar,
            "commentaires" =>$listComment,
            "series" => $series];

        return view('test',['user' => $tab]);
    }

    public function avatar($id_user,$source){
        $user = User::findOrFail($id_user);
        $user->avatar = $source;
        $user->save();
    }

    public function statistique($id_user){
        $total = 0;
        $user = User::findOrFail($id_user);
        $episodes = $user->seen;
        foreach ($episodes as $episode){
            $total+=$episode->duree;
        }
        $listCom = $user->comment;
        $listCom->groupBy('serie_id');

    }

}