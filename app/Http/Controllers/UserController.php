<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController
{
     public function profil($id_user){
        $user = User::findOrFail($id_user);
        $nomUser = $user->name;
        $avatar = $user->avatar;
        $listComment=[];
        $comments = Comment::where('user_id',$id_user)
        ->orderBy("created_at", "DESC")
        ->take(5)
        ->get();
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

        $total = 0;
        $user = User::findOrFail($id_user);
        $episodes = $user->seen;
        foreach ($episodes as $episode){
            $total+=$episode->duree;
        }
        return view('profil',["id" =>$id_user,
            "nom"=>$nomUser,
            "avatar" => $avatar,
            "commentaires" =>$listComment,
            "series" => $series,
            "duree"=>$total]);
    }

    public function personnaliser($id_user){

        $user = User::findOrFail($id_user);
        $nomUser = $user->name;
        $avatar = $user->avatar;
        $email = $user->email;
        $id = $id_user;
        

        $tab = ["nom"=>$nomUser, "avatar" => $avatar, "email" => $email];

        return view('personnaliser', ['user' => $tab, 'id'=>$id]);

    }

    public function changerProfil($id_user){
        $erreur = "";
        $email = $_POST['mail'];
        $old_mdp = $_POST['old_mdp'];
        $new_mdp = $_POST['new_mdp'];
        $confirm_new_mdp = $_POST['confirm_new_mdp'];
        $avatar = $_POST['avatar'];
        $id = $id_user;

        $user = User::findOrFail($id);
        $nomUser = $user->name;
        $avatar = $user->avatar;
        $db_mdp = $user->password;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($old_mdp != $new_mdp) {
                if ($new_mdp == $confirm_new_mdp) {
                    $new_mdp_hash = Hash::make($new_mdp);
                    if ($db_mdp == $new_mdp_hash) {
                        DB::table('users')
                                ->where('id', $id)
                                ->update([
                                'email' => $email,
                                'password' => $new_mdp_hash,
                                'avatar' => $avatar,
                                ]);
                                $success = "Vos informations ont été mise à jour !";
                                return view('personnaliser', ['success' => $success]);
                    }else{
                        $erreur = "Mauvais mot de passe !";
                        return view('personnaliser', ['erreur' => $erreur]); 
                    }
                                
                }else{
                    $erreur = "Vos mot de passe ne correspondent pas !";
                    return view('personnaliser', ['erreur' => $erreur]); 
                }
            }else{
               $erreur = "C'est votre ancien mot de passe !";;
                return view('personnaliser', ['erreur' => $erreur]); 
            }
        }else{
            $erreur = "Adresse mail non valide";
            return view('personnaliser', ['erreur' => $erreur]);
        }


    }

}