<?php
if(isset($_POST['bouton'])){

    $devinette = $_POST['devinette'];
    $reponse = $_POST['reponse'];
    if($devinette!="" && $reponse!=""){
        require_once("database.php");
        $requette = "INSERT INTO articles(devinette,reponse) VALUES('$devinette','$reponse')";
        $statement = $con->prepare($requette);
        $statement->execute();

        if($statement){
            header('location: ajouter.php?texte=reussi');
        }else{
            header('location: ajouter.php?texte=echec');
        }
    }else{
        header('location: ajouter.php?texte=toutremplir');
    }
    
    

}else{
    header('location: ajouter.php?texte=pasdevaleurparlebouton');
}

