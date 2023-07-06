<?php
//10 derniers articles
function lastBlogPosts () {
    $array = [];
    include 'config/database.php';
    //Requete SQL / Metod prepare pour faire requetes BDD
    $request = file_get_contents('database/lastBlogposts.sql'); // lis le fichier lastBlogPOsts.sql
    $stmt = $pdo->prepare($request);
    // Lier paramètres, ligne 10 inutile pour recuperer des données.
   // $stmt->bindParam(':id', $id, PDO::PARAM_INT); // <-- Automatically sanitized for SQL by PDO
   // Executer requetas
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}


function blogPostById($articleId) {
    include 'config/database.php';
    // Recupere un article selon son ID / Dans requete pas de code !
    $stmt = $pdo->prepare('SELECT Articles.* FROM `Articles` INNER JOIN Author ON Author.ID = Articles.Author_ID WHERE Articles.ID = :id');// InnerJOIN je dois bien préciser dans quel table on cherche
    // Lier paramètres, ligne 10 inutile pour recuperer des données.
    $stmt->bindParam(':id', $articleId); // <-- Automatically sanitized for SQL by PDO
    // Executer requete
    $stmt->execute();
    return $stmt;
}

function commentsByBlogPost($articleId)
{
    include 'config/database.php';
    // Recupere les commentaires selon l'ID de l'article en cours
    $stmt = $pdo->prepare('SELECT *, Articles.ID FROM `Comments` INNER JOIN Articles ON Comments.Articles_ID = Articles.ID WHERE Comments.Articles_ID = :articleId');// requete propre à sql !
    // Lier paramètres, ligne 10 inutile pour recuperer des données.
    $stmt->bindParam(':articleId', $articleId); // <-- Automatically sanitized for SQL by PDO
    // Executer requete
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}
function blogPostDelete ($articleId) {
    include 'config/database.php';
    $request = file_get_contents('database/delete.sql'); // lis le fichier lastBlogPOsts.sql
    $stmt = $pdo->prepare($request);
    $stmt->bindParam(':articleId', $articleId);
    $stmt->execute();
}

function blogPostCreate ($title, $startdate, $enddate, $author_ID, $importance, $text) {
    include 'config/database.php';
    $request = file_get_contents('database/create.sql');
    $stmt = $pdo->prepare($request);
    $stmt->bindParam(':start', $startdate);
    $stmt->bindParam(':end', $enddate);
    $stmt->bindParam(':author_ID', $author_ID);
    $stmt->bindParam(':importance',$importance);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':text', $text);

    $stmt->execute();
}

function blogPostUpdate ($title, $startdate, $enddate, $author_ID, $importance, $text, $id) {
    include 'config/database.php';
    $request = file_get_contents('database/update.sql');
    $stmt = $pdo->prepare($request);
    $stmt->bindParam(':start', $startdate);
    $stmt->bindParam(':end', $enddate);
    $stmt->bindParam(':author_ID', $author_ID);
    $stmt->bindParam(':importance',$importance);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':text', $text);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}