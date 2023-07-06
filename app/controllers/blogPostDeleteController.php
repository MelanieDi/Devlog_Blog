<?php
// get id
$id = $_GET['id'];
//  call delete function(id)
include "app/persistences/blogPostData.php";
blogPostDelete($id); // Cet ID est celui que l'on a passé en url
// redirect home
header("Location: /Blog");

