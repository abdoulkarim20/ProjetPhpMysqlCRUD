<?php
    if(!empty($_GET['r'])){
        switch($_GET['r']){
            case "etudiant":
                require_once("./module/etudiant/index.php");
                break;
            default:
                echo "Error";        
        }
    }

?>