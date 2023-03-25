<?php

require_once('Data.php');
require_once('Devinette.php');


class ControlModel extends Data{

      public function getAllUsers(){
        $requette = "SELECT * FROM articles";
        $statement = $this->connect()->prepare($requette);
        $statement->execute();
        $resulltat = $statement->fetchAll();

        
        foreach($resulltat as $valeur){
            $devinette = new Devinette();
            $devinette->setDevinette($valeur['devinette']);
            $devinette->setReponse($valeur['reponse']);

            $devinettes[] = $devinette;
        }
        return $devinettes;
        
      }
}


?>