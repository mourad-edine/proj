<?php
class Data{

private $servername;
private $dbname;
private $mot_de_passe;
private $username;
public function connect(){
        $this->servername = 'localhost';
        $this->dbname = 'testpdo';
        $this->mot_de_passe = '1234';
        $this->username = 'root';

        $dsn = "mysql:dbname=".$this->dbname.";host:".$this->servername;
        try{
            $con = new PDO($dsn,$this->username,$this->mot_de_passe);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
             echo $e->getMessage()." ".$e->getFile()." ".$e->getLine();
        }

        return $con;

    }



}  
?>