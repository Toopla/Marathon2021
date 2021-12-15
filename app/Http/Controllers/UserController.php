<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;

class UserController
{

    // Profil donne l'id, le nom , l'avatar et un tableau de commentaires le tout dans un tableau
    public function profil($id_user){
        $user = User::where('id',$id_user)->get();
        $nomUser = $user[0]->name;
        $avatar = $user[0]->avatar;
        $listComment=[];
        $comments = Comment::where('user_id',$id_user)->take(5)->get();
        foreach($comments as $com){
            $listComment[] = ["content" =>$com->content,
                                "note" =>$com->note];
        }
        $tab = ["id" =>$id_user,
            "nom"=>$nomUser,
            "avatar" => $avatar,
            "commentaires" =>$listComment];


        return view('test',['user' => $tab]);
    }
}