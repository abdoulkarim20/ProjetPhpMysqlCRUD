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
        <h2 class="text-center mt-3">La liste des apprenants</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom et Prenoms</th>
                    <th scope="col">Adresse email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require_once("./exe/etudiant/liste.php");
                foreach($data as $value){?>
                    <tr>
                        <td colspan="1"><?php echo $value['id']; ?></td>
                        <td colspan="1"><?php echo $value['nom']; ?></td>
                        <td colspan="1"><?php echo $value['email']; ?></td>
                        <td colspan=""><a href=""><i class="bi bi-pencil-fill" style="font-size:1.5rem"></i></a></td>
                        <td colspan=""><a onclick="return confirm('Etes-vous sur de vouloir le supprimer ?')" href="exe/etudiant/delete.php?id=<?php echo $value['id'] ;?>"><i class="bi bi-trash-fill" style="color:#ce0033; font-size:1.5rem"></i></a></td>
                        <td colspan=""><a href=""><i class="bi bi-eye-slash-fill" style="font-size:1.5rem"></i></a></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </main>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>