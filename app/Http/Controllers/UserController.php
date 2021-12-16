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

    public function connexion(){
        if (isset($_POST['connexion'])) {
          
        
            session_start();

            $login = $_POST['login'];
            $mdp = sha1($_POST['mdp']);

            $user = User::SELECT("email", "password")
            ->WHERE('email', $login);

            if (isset($user)) {
                if ($mdp == $user['password']) {
                    $_SESSION['login'] = $login;
                    return view('welcome');
                }
            }
        }


    }

    public function inscription(){
        if (isset($_POST['inscription'])) {
        
            $login = htmlspecialchars($_POST['login']);
            $mdp = sha1($_POST['mdp']);
            $confirm_mdp = sha1($_POST['confirm_mdp']);
            $mail = htmlspecialchars($_POST['mail']);
            $confirm_email = htmlspecialchars($_POST['confirm_email']);

            if (strlen($login)<=255) {
                if ($mail == $confirm_mail) {
                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $reqmail = User::WHERE("email", $mail);

                        if (isset($reqmail)) {
                            if ($mdp == $confirm_mdp) {
                                $newUser = new User;
                                $newUser->name = $login;
                                $newUser->email = $mail;
                                $newUser->password = $mdp;
                                $newUser->administrateur = 0;
                                $newUser->avatar = "avatar1";
                                $newUser->save();
                                $success = "Votre compte a bien été créé";

                                return view('connexion', ["success" => $success]);


                            }else{
                                $erreur="Vos mots de passe ne sont pas les mêmes";
                            }

                        }else{
                            $erreur="Cette adresse mail est déjà utilisée";
                        }
                    }
                }else{
                    $erreur = "Vos adresses mail ne correspondent pas !";
                }
            }else{
                $erreur ="Votre pseudo ne doit pas dépasser 255 caractère !";
            }

            echo $erreur;
        }

    }

    public function versConnexion(){
        return view('connexion');
    }

    public function versInscription(){
        return view('inscription');
    }
}