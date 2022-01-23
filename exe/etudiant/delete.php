<?php
    require_once("../../dbConfig.php");
    if(!empty($_GET['id'])){
        $id=$_GET['id'];
        var_dump($id);
        $sql=$dbConnexion->prepare("DELETE FROM etudiants WHERE id=$id");
        $data=$sql->execute();
        try {
            if($data){
                header("Location: ../../?r=etudiant&&m=list");
            }
        } catch (PDOException $e) {
            echo "Erreur de suppression".$e;
        }
    }
?>