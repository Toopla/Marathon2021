<?php

namespace App\Http\Controllers;

use App\Models\Serie;

class UserController
{
    public function profil($id_user){
        $user = User::where('id',$id_user)->get();
        $nomUser = $user[0]->name;
        $avatar = $user[0]->avatar;
        $listComment=[];
        // Je rajoute un commentaire pour tester

        $comments = Comment::table('comments')->where('user_id',$id_user)->take(5)->get();
        foreach($comments as $com){
            $listComment[] = ["content" =>$com->content,
                                "note" =>$com->note];
        }
        $tab = ["id" =>$id_user,
            "nom"=>$nomUser,
            "avatar" => $avatar,
            "commentaires" =>$listComment];


        return view('profil',['user' => $tab]);
    }
}