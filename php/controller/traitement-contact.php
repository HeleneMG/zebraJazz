<?php
        $nom = $_REQUEST["nom"] ?? "";
        $email = $_REQUEST["email"] ?? "";
        $message = $_REQUEST["message"] ?? "";


        insererLigneTable("contact", [
                "nom" => $nom, 
                "email" => $email, 
                "message" => $message 
                ]);

        $ligne = 
<<<CODETEXT
-------------
Nom: $nom
Email: $email
Message:
$message

CODETEXT;
        @mail("webmaster@monsite.fr", "nouveau message contact", $ligne);
 
