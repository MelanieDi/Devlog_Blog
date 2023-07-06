<?php
include "app/persistences/blogPostData.php";
// le contrôleur qui permet de créer un article.
//si le formulzire est envoyé alors:
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $startdate = $_POST ['Startdate'];
    $enddate = $_POST ['Enddate'];
    $author_ID = $_POST ['Author_ID'];
    $importance = $_POST ['Importance'];
    $text = $_POST ['text'];
    blogPostCreate($title, $startdate, $enddate, $author_ID, $importance, $text);
}




include "ressources/views/blogPostCreate.tpl.php";
