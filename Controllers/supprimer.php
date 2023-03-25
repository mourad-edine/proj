<?php
if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once("database.php");
        $requette = "DELETE FROM articles WHERE id = '$id'";
        $statement = $con->prepare($requette);
        $statement->execute();

        if($statement){
            header('location: ../index.php?texte=reussi');
        }else{
            header('location: ../index.php?texte=echec');
        }
    }
?>
    
