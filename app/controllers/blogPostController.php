<?php
include "app/persistences/blogPostData.php";
//Variable post est egal au retour de la fonction blogPostyById
$post = blogPostById($_GET['id']);
$comments = commentsByBlogPost($_GET['id']);
include "ressources/views/blogPost.tpl.php";
