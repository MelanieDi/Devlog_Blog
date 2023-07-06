<?php

try {  // Test cette ligne
    // Variable PDO me permet de me connecter à ma BDD
    $pdo = new PDO('mysql:host=localhost:8889;dbname=Blog', 'root', 'root');

} catch (PDOException $e) { // "Attrape l'erreur et affiche là" Sert à afficher erreurs
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
