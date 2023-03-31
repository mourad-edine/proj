<?php
class Databases{

    private $nomserver;
    private $utilisateur;
    private $mot_de_passe;
    private $nom_base_de_donne;

    public function connection(){
        $this->nomserver = 'localhost';
        $this->utilisateur = 'root';
        $this->mot_de_passe = '1234';
        $this->nom_base_de_donne = 'fitness';
        $dsn = "mysql:dbname=".$this->nom_base_de_donne.";host:".$this->nomserver;
        try{
            $con = new PDO($dsn,$this->utilisateur,$this->mot_de_passe);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
             echo $e->getMessage()." ".$e->getFile()." ".$e->getLine();
        }

        return $con;
    }
}  
?>