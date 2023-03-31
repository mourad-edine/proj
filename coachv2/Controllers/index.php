<?php
require_once(MODEL.'ControlModelisation.php');

class Home{
    /**
     * page
     *
     * @return void
     */
    public function login(){
       
       require_once(VIEW.'loginView.php');
    }
    /**
     * page
     *
     * @return void
     */
    public function register(){
       require_once(VIEW.'registerView.php');
    }

    public function showDashBoard(){
      $nombre = new ControlModelisation();
      require_once(VIEW.'dashboardView.php');
    }

    public function showCoach(){
       $coach = new ControlModelisation;
       $affichage = new ControlModelisation;
       $affiche = $affichage->getAllCoach();
       require_once(VIEW.'coachView.php');

 
    } 


    public function showClient(){
       $client = new ControlModelisation();
       $total = new ControlModelisation();
       $clients = $client->getAllclients();
       require_once(VIEW.'clientView.php');

    }

    public function ajouterClient(){

    }
    public function ajouterCoach(){
        
    }
    public function ajouterMateriel(){

    }

    public function reglerPayement(){
       $client = new ControlModelisation();
       require_once VIEW.'profilView.php';
    } 

    /**
     * function
     *
     * @return void
     */
    public function verification(){
        $variable = new ControlModelisation();
        $variable->verifier();
    }
}