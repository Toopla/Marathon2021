<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Serie;

class CommentController
{

    public function addComment($comment,$note){
        $commentaire = new Comment;
        $commentaire->id = 1;
        $commentaire->content = $comment;
        $commentaire->note= $note;
        # Ajouter les derniers attributs
        # "validated"
        #"user_id"
        #"serie_id"
        # Retourner la page de détail de la série
    }
}