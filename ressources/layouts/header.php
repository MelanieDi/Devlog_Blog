<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $metaTitle; ?></title>
    <meta name="descritpion" content=<?= $metaDescription ?>>
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>
<header>
    <input class="navbar_checkbox" type="checkbox" id="toggle">

    <div id="contact_info_container">
        <div id="contact_info">
            <p><i class="fa-solid fa-envelope"></i> melanie.di-ciccio@le-campus-numerique.fr</p>
            <p><i class="fa-regular fa-phone"></i> 06.65.69.17.93</p>
        </div>
    </div>

    <nav id="navbar_container">
        <a class="navbar-brand" href="?page=accueil"><h2>Melanie Di Ciccio</h2></a>
        <label class="navbar-toggler" for="toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </label>

        <ul class="nav-list">
            <li class="nav-item">
                <a class="nav-link" href="#skills">Compètences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#presentation">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact.php">Contact</a>
            </li>
        </ul>
    </nav>
</header>

