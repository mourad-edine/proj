<?php
/**
 * require de deux fichier contenant l'ouverture de la connection à la base de donné via PDO
 */
require_once(OBJET.'Data.php');

/**
 * require d'une classe Devinette qui contient tout les informations à propos du jeu
 */
require_once(OBJET.'Devinette.php');


class ControlModel extends Data{
      //obtenir tout les utilisateur en tant qu'objet
      public function getAllUsers(){
        $requette = "SELECT id,devinette,reponse FROM articles";
        $statement = $this->connect()->prepare($requette);
        $statement->execute();
        $resultat = $statement->fetchAll();

        
        foreach($resultat as $valeur){
            $devinette = new Devinette();
            $devinette->setDevinette($valeur['devinette']);
            $devinette->setReponse($valeur['reponse']);
            $devinette->setid($valeur['id']);


            $devinettes[] = $devinette;
        }

        /**
         * retourne un tableau contenant les objet devinette,reponse et Id dans un tableau
         */
        return $devinettes;
        
      }

      //verifier si l'utilisateur a entré les bonnes informations
      public function verifier(){
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

      }
      //connection à la base de donné pour l'insertion
      public function change(){
        if(isset($_POST['bouton'])){

          $devinette = $_POST['devinette'];
          $reponse = $_POST['reponse'];
          if($devinette!="" && $reponse!=""){
              $requette = "INSERT INTO articles(devinette,reponse) VALUES('$devinette','$reponse')";
              $statement = $this->connect()->prepare($requette);
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

     //connection à la base de donné pour la suppression par $id
      public function supprimmer(){
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          $requette = "DELETE FROM articles WHERE id = '$id'";
          $statement = $this->connect()->prepare($requette);
          $statement->execute();
    
          if($statement){
              header('location: home');
          }else{
              header('location: home');
          }
      }
      }
}


?>