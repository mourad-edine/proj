

<?php
require_once(CONTROLLER.'index.php');

class Routeur{
    
     public  $requette;
     
     public $routes = [
                       "home"=>["Controllers"=>"Home","method"=>"showHome"],//class Home
                       "contact"=>["Controllers"=>"Home","method"=>"showContact"],
                       "ajouter"=>["Controllers"=>"Home","method"=>"ajouter"]

                       
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

       
       }else{
           require_once(VIEW.'header.php');
           echo '<h4 class="text-danger" style="margin-left: 700px; margin-top: 50px;">404</h4>';
       }
    

     }

}


?>