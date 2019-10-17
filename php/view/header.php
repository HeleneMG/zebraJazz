<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poller+One|Roboto|Montserrat:300,800&display=swap" rel="stylesheet">
        <link href="assets/css/cssbox.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <title><?php echo $title ?? "titre1 par défaut" ?></title>
    </head>

    <body>
        <header>
            <h1>ZEBRAJAZZ QUINTET</h1>
            <nav class="une">
                <div class="entete hamburger">
                    <i class="material-icons menuHamb">menu</i>
                    <ul class="menuNav">
                        <i class="material-icons md-18 arrow-back">arrow_back</i>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="bio.php">Bio</a></li>
                        <li><a href="agenda.php">Agenda</a></li>
                        <li><a href="concerts.php">Concerts</a></li>
                        <li><a href="galerie.php">Galerie</a></li>
                        <li><a href="affiches.php">Affiches</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <nav class="deux">
                <div class="entete desktop">
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="bio.php">Bio</a></li>
                        <li><a href="agenda.php">Agenda</a></li>
                        <li><a href="concerts.php">Concerts</a></li>
                        <li><a href="galerie.php">Galerie</a></li>
                        <li><a href="affiches.php">Affiches</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
