<?php

// Le contrôleur  controller/frontend.php  récupère lui aussi les informations dont on a besoin 
//(id du billet, auteur, commentaire) et les transmet au modèle :

function addComment($postId, $author, $comment)
{
    $affectedLines = postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}