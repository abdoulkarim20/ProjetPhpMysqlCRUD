<?php
    //Nous avons besoins de trois chose 
    $servername="localhost";
    $username="Karim";
    $password="Fooly@1251";

    try {
        //ici nous allons instancier la classe pdo 
        $dbConnexion = new PDO("mysql:host=$servername;dbname=testNom",$username,$password);
        //Capture
        $dbConnexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //ATTR_ERRMODE cree un rapport d'errur
        //ERRMODE_EXCEPTION emet une execption
        // echo "Connexion reussie";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    //Pour fermer la connexion on a
    // $dbConnexion=null;
    // var_dump($dbConnexion);

?>