<?php
    require_once("../../dbConfig.php");
    var_dump($dbConnexion);
    if(!empty($_GET)){
        extract($_GET);
        $sql=$dbConnexion->prepare("UPDATE etudiants SET nom=:nom, email=:email WHERE id=:id");
        $sql->bindParam(':nom',$nom);
        $sql->bindParam(':email',$email);
        $sql->bindParam(':id',$id);
        $data=$sql->execute();
        try {
            if($data){
                header("Location:../../?r=etudiant&m=list");
            }
        } catch (PDOException $e) {
                echo $e->getMessage();
        }
    }
?>