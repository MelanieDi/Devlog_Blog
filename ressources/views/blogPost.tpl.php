<?php
// Blog post pour voir UN ARTICLE
// Si variable article existe
if (isset($post)) {
    //chaque élément du tableau articles est un article
//Chaque post est un post (pour pouvoir afficher les infos)
    foreach ($post as $post) {
        ?>
<!--Recup ID de l'article en cours de visualisation-->
        <a href="?action=update&id=<?=$post['ID'] ?>">Modification</a>
        <h4><i><strong>Titre : <?= $post['Title'] ?></strong></i></h4>
        <h5>Commentaires :</h5>
        <?php
        foreach ($comments as $comment) {
            ?>
            <em><em><?= $comment['Commentaires'] ?></em></p>
            <?php
        }

    }

} else {
    echo "article.Id";
}

?>
