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

    }

    public function showCoach(){

    }


    public function showClient(){

    }

    public function ajouterClient(){

    }
    public function ajouterCoach(){
        
    }
    public function ajouterMateriel(){

    }

    public function reglerPayement(){

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