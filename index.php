<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">App CRUD/PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="?r=etudiant&&m=add">Ajouter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?r=etudiant&&m=list">Liste</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <?php
        if(!empty($_GET['r'])){
            require_once("./page/route.php");
        }else{
            echo "<h1>Je suis la page d'accueil</h1>";
        }
    
    ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
?>