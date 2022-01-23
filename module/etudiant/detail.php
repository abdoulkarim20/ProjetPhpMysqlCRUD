<?php
    require_once("./exe/etudiant/liste.php");
    if(!empty($_GET['id'])){
        $id=$_GET['id'];
        $sql=$dbConnexion->prepare("SELECT * FROM etudiants WHERE id=$id");
        $sql->execute();
        $data=$sql->fetch();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <h2 class="text-center mt-3">Detail sur l'etudiant</h2>
        <form method="" action="./exe/etudiant/edit.php">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom Complet</label>
                <input type="text" class="form-control" name="nom" value="<?= $data['nom'];?>" readonly id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $data['email'];?>" readonly id="exampleInputEmail1" aria-describedby="emailHelp" required>    
            </div>
            <a class="btn btn-primary" href="?r=etudiant&m=list">Retour</i></a>
            <a class="btn btn-primary" href="?r=etudiant&m=edit&id=<?=$data['id'];?>">Modifier</i></a>
            <a class="btn btn-danger" onclick="return confirm('Etes-vous sur de vouloir le supprimer ?')" href="exe/etudiant/delete.php?id=<?php echo $data['id'] ;?>">Supprimer</a>
            <!-- <button type="submit" class="btn btn-primary">Enregistrer</button> -->
        </form>
    </main>
    
</body>
</html>
<!--Debut modal section-->

<!--Fin modal section--> 