<?php
require "php/mes-fonctions.php";

$idFormulaire = $_REQUEST["idFormulaire"] ?? "";

if ($idFormulaire != "")
{
    // IL FAUT DISTINGUER LE FORMULAIRE A TRAITER
    if ($idFormulaire == "contact")
    {
        require "php/controller/traitement-contact.php";
    }
}