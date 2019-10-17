<?php

function creerConnexionBDD()
{
    // Data Source Name
    $dsn = 'mysql:dbname=zebrajazz;host=localhost;charset=utf8mb4';
    $user = 'root';
    $password = '';
    // créer la connexion avec MySQL
    $dbh = new PDO($dsn, $user, $password);

    return $dbh;
}

function envoyerRequeteSQL ($requeteSQLPreparee, $tabAssoColonneValeur)
{
    $dbh = creerConnexionBDD();
    // LA REQUETE SE FAIT EN 2 TEMPS
    // ETAPE prepare
    $pdoStatement = $dbh->prepare($requeteSQLPreparee);
    // ETAPE execute
    $pdoStatement->execute($tabAssoColonneValeur);
    // RENVOYER $pdoStatement POUR LA LECTURE
    return $pdoStatement;
}

// EN PHP: VERSION AVEC UN TABLEAU ASSOCIATIF
function concatenerTexteAsso ($nomTable, $tabAssoColonneValeur)
{
    // AJOUTER LE CODE MANQUANT
    $texteFinal = "";
    $texteToken = "";
    $indice     = 0;
    foreach($tabAssoColonneValeur as $cle => $valeur)
    {
        if ($indice > 0)
        {
            // ON AJOUTE LA VIRGULE AU TEXTE FINAL
            $texteFinal = "$texteFinal,$cle";
            $texteToken = "$texteToken,:$cle";
        }
        else
        {
            // ON N(AJOUTE PAS LA VIRGULE) AU TEXTE FINAL
            $texteFinal = "$texteFinal$cle";
            $texteToken = "$texteToken:$cle";
        }
        // J'INCREMENTE MOI MEME L'INDICE
        $indice++;
    }

    // JE COMPLETE LE TEXTE FINAL
    $texteFinal = "INSERT INTO $nomTable ( $texteFinal ) VALUES ($texteToken)";
    return $texteFinal;
}

// INSERER UNE LIGNE DANS N'IMPORTE QUELLE TABLE
function insererLigneTable($nomTable, $tabAssoColonneValeur)
{
    // ETAPE1: CREER UNE REQUETE SQL PREPAREE
    $requeteSQLPreparee = concatenerTexteAsso($nomTable, $tabAssoColonneValeur);
    // ETAPE2: ENVOYER LA REQUETE
    $pdoStatement = envoyerRequeteSQL($requeteSQLPreparee, $tabAssoColonneValeur);
}