<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\User;
use App\Models\Comment;

class UserController
{
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

        return view('profil',['user' => $tab]);
    }

}