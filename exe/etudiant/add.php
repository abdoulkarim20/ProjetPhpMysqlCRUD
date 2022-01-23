<?php
  if(!empty($_POST['nom'] && !empty($_POST['email']))){
      extract($_POST);
    //   var_dump($_POST);
      require_once("../../dbConfig.php");
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