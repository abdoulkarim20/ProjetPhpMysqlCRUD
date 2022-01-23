<?php
    require_once("./exe/etudiant/liste.php");
    if(!empty($_GET['id'])){
        $id=$_GET['id'];
        var_dump($id);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <main class="container">   
        <!--Debut modal section-->
        <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier l'apprenant</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <?php
                        var_dump($data);
                    ?>
                   
                    <div class="modal-body">
                        <form method="" action="./exe/etudiant/add.php">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nom Complet</label>
                                <input type="text" class="form-control" name="nom" value="<?= $data['nom'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" value="<?= $data['email'];?>" id="exampleInputEmail1" aria-describedby="emailHelp" required>    
                            </div>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin modal section-->  

        <!-- Debut liste apprenant -->
        <h2 class="text-center mt-3">La liste des apprenants</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom et Prenoms</th>
                    <th scope="col">Adresse email</th>
                    <th scope="col" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($data as $value){?>
                    <tr>
                        <td colspan="1"><?php echo $value['id']; ?></td>
                        <td colspan="1"><?php echo $value['nom']; ?></td>
                        <td colspan="1"><?php echo $value['email']; ?></td>
                        <td colspan="" class="text-center"><a href="?r=etudiant&m=edit&id=<?php echo $value['id']?>" data-bs-toggle="" data-bs-target="#"><i class="bi bi-pencil-fill" style="font-size:1.5rem ; color:yellowgreen"></i></a></td>
                        <td colspan=""><a onclick="return confirm('Etes-vous sur de vouloir le supprimer ?')" href="exe/etudiant/delete.php?id=<?php echo $value['id'] ;?>"><i class="bi bi-trash-fill" style="color:#ce0033; font-size:1.5rem"></i></a></td>
                        <td colspan=""><a href="?r=etudiant&m=voir&id=<?php echo $value['id']?>"><i class="bi bi-eye-slash-fill" style="font-size:1.5rem"></i></a></td>
                       
                    </tr>
                <?php }?>
            </tbody>
        </table>
        <!-- Fin liste apprenants -->
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>