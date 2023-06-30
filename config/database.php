<?php

try {  // Test cette ligne & Sert toujours à me connecter à BDD
    $pdo = new PDO('mysql:host=localhost;dbname=Blog', 'root', 'root');

} catch (PDOException $e) { // "Attrape l'erreur et affiche là" Sert à afficher erreurs
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
