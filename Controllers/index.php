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
    require_once(VIEW.'header.php');
                
                     if(isset($_GET['texte'])){
                     $texte = $_GET['texte'];
                     if($texte == 'reussi'){
                        echo '<h1 class="text-success">ajouté avec success</h1>';
                     }else if($texte == 'echec'){
                        echo '<h1 class="text-danger">ajouté avec success</h1>';
                     }else if($texte == 'toutremplir'){
                        echo '<h1 class="text-danger">veuillez tout remplir svp</h1>';
                     }else if($texte == 'pasdevaleurparlebouton'){
                        echo '<h1 class="text-danger">pas de valeur revoyé pas le bouton</h1>';
                     }else{
                        echo "";
                     }
                    }


    require_once(VIEW.'ajoute.php');
    require_once(VIEW.'footer.php');
  }

  public function modifier(){
    if(isset($_POST['bouton'])){

      $devinette = $_POST['devinette'];
      $reponse = $_POST['reponse'];
      if($devinette!="" && $reponse!=""){
          require_once("database.php");
          $requette = "INSERT INTO articles(devinette,reponse) VALUES('$devinette','$reponse')";
          $statement = $con->prepare($requette);
          $statement->execute();
  
          if($statement){
              header('location: ajouter?texte=reussi');
          }else{
              header('location: ajouter?texte=echec');
          }
      }else{
          header('location: ajouter?texte=toutremplir');
      }
      
      
  
  }else{
      header('location: ajouter?texte=pasdevaleurparlebouton');
  }
  
  
  }
}
?>