<?php
if(isset($_GET['id'])){
        $id = $_GET['id'];
        require_once("database.php");
        $requette = "DELETE FROM articles WHERE id = '$id'";
        $statement = $con->prepare($requette);
        $statement->execute();

        if($statement){
            header('location: ../home');
        }else{
            header('location: ../home');
        }
    }
?>
    
