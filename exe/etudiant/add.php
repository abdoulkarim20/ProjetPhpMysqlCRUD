<?php
require_once("../../dbConfig.php");
  if(!empty($_POST['nom'] && !empty($_POST['email']))){
      extract($_POST);
    //   var_dump($_POST);
    $sql=$dbConnexion->prepare("SELECT * FROM etudiants WHERE email=?");
    $sql->bindParam(1,$email);
    $sql->execute();
    $data=$sql->fetch();
    if($data){
      echo "<script>alert('Cet etudiant existe deja')
                        document.location.href='../../?r=etudiant&m=add';
                    </script>";
    }
    //   var_dump($dbConnexion);
      $sql=$dbConnexion->prepare("INSERT INTO etudiants(nom,email) VALUES(?,?)");
      $sql->bindParam(1,$nom);
      $sql->bindParam(2,$email);
      $sql->execute();
      try {
          if($sql){
              echo "<script>alert('Enregistrement avec success')
                        document.location.href='../../?r=etudiant&m=list';
                    </script>";
          }
      } catch (PDOException $e) {
          echo $e->getMessage();
      }
  }else{
        echo "<script> alert('tous les champs sont obligatoire')</script>";
        header("Location: ../../?r=etudiant&m=add");
        die();
  }
?>