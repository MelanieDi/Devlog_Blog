<?php
include "app/persistences/blogPostData.php";
$articles = lastBlogPosts();
// Appelle la vue
include "ressources/views/home.tpl.php";


//var_dump(lastBlogPosts()); // pas de paramètres donc parenthèses vides);
