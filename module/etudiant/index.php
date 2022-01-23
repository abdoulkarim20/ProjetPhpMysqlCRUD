<?php
    if(!empty($_GET['m'])){
        switch($_GET['m']){
            case "add":
                require_once("add.php");
                break;
            case "list":
                require_once("liste.php");
                break;
            case "edit":
                require_once("edit.php");
                break;
                case "voir":
                    require_once("detail.php");
                    break;
            default:
            echo "pas ok";
        }
    }
?>