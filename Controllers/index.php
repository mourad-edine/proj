<?php 


class Home{

  public function showHome(){
    require_once(VIEW.'header.php');

    require_once("database.php"); 
    $requette = "SELECT * FROM articles";
    $statement = $con->prepare($requette);
    $statement->execute();
    $resultat = $statement->fetchAll();

 
    require_once(VIEW.'home.php');

    require_once(VIEW.'footer.php');


  }

  public function showContact(){
    require_once(VIEW.'header.php');
    require_once(VIEW.'contact.php');
  }

  public function ajouter(){
     echo '<h1>hello</h1>';
  }
}
?>