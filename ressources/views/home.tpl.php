<h1>Page d'accueil</h1>
<?php
// Si variable article existe
if (isset($articles)) {
    //chaque élément du tableau articles est un article
    foreach ($articles as $article) {
        ?>
        <h3><a href="?action=blogpost&id=<?=$article['ID']?>">Titre de l'article : <?= $article['Title'] ?></a></h3>
        <p>Date de parution : <?= $article['Startdate'] ?></p>
        <p>Auteur : <?= $article['Pseudo'] ?></p>
        <?php
    }

} else {
    echo "<h3>Pas d'article</h3>";
}

?>
