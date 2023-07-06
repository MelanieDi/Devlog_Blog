<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Index = Rooter
$routes = [
    'home' => "ressources/views/home.php",
    'contact' => "ressources/views/contact.php",
    'playlist' => "ressources/views/playlist.php",
    '/' => "app/controllers/homeController.php", // FrontController permet d'appeler la page homecontroller
    'blogpost' => "app/controllers/blogPostController.php",
    'delete'=> "app/controllers/blogPostDeleteController.php",
    'create'=> "app/controllers/blogPostCreateController.php",
    'update'=> "app/controllers/blogPostModifyController.php",

    // ajoutez d'autres routes ici
];
$page = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
// si aucune page n'est définie dans $_GET, alors on utilise 'home' comme page par défaut
if (empty($page)) {
    $page = '/';
}
ob_start(); // commence la mise en tampon de sortie
if (!array_key_exists($page, $routes)) {
    // Si la page demandée n'existe pas dans $routes, renvoyer une erreur 404
    header("HTTP/1.0 404 Not Found");
    include('ressources/views/404.php'); // supposons que vous avez un fichier 404.php pour gérer les erreurs 404
} else {
    // Si la page demandée existe dans $routes, inclure le fichier PHP correspondant
    include($routes[$page]);
}
$render = ob_get_clean(); // récupère le contenu du tampon et le stocke dans $render
echo $render; // affiche le contenu stocké dans $render
include('config/database.php');















