<?php
//blogPostModifyController, contrôleur qui permet de modifier un article.


include "app/persistences/blogPostData.php";
// le contrôleur qui permet de modifier un article.
//si le formulzire est envoyé alors:
$id = $_GET['id'];
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $startdate = $_POST ['Startdate'];
    $enddate = $_POST ['Enddate'];
    $author_ID = $_POST ['Author_ID'];
    $importance = $_POST ['Importance'];
    $text = $_POST ['text'];
    blogPostUpdate($title, $startdate, $enddate, $author_ID, $importance, $text, $id);
}

include "ressources/views/blogPostUpdate.tpl.php";

