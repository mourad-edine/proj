

<?php
require_once(CONTROLLER.'index.php');
class Routeur{
    
     public  $requette;
     
     public $routes = [
                       "login"=>["Controllers"=>"Home","method"=>"login"],//class Home    
                       "register"=>["Controllers"=>"Home","method"=>"register"],    
                       "verif"=>["Controllers"=>"Home","method"=>"verification"],       
                      ];

     public function __construct($requette)
     {
        $this->requette = $requette;
     }
     public function renderController(){
       $req = $this->requette;
       if(key_exists($req,$this->routes)){
           $controllers = $this->routes[$req]["Controllers"];
           $method = $this->routes[$req]["method"];
           $controlleur_courant = new $controllers();
           $controlleur_courant->$method();

       
       }
       /*else if($this->requette ='temp'){
          require_once(CONTROLLER.'temp.php');
       }*/else{
           require_once(VIEW.'header1.php');
           echo '<h3 class="text-danger" style="">404</h3>';
       }
    

     }

}