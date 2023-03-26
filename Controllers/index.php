<?php 
require_once(MODEL.'ControlModel.php');

class Home{
//page
  public function showHome(){
    require_once(VIEW.'header.php');
    $jeux = new ControlModel();
    $valeurquest = $jeux->getAllUsers();
 
    require_once(VIEW.'home.php');

    require_once(VIEW.'footer.php');


  }
//page
  public function showContact(){
    require_once(VIEW.'header.php');
    require_once(VIEW.'contact.php');
  }
//page
  public function ajouter(){
    require_once(VIEW.'header.php');
                
    $verif = new ControlModel();
    $verif->verifier();

    require_once(VIEW.'ajoute.php');
    require_once(VIEW.'footer.php');
  }
//function
  public function modifier(){
    $mod = new ControlModel();
    $mod->change();
  
  }



  //function
  public function supprimer(){
    $sup = new ControlModel();
    $sup->supprimmer();
  }
}
?>