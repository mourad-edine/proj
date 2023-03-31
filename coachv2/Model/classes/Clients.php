<?php


class Clients{
    private $id;
    private $nom;
    private $prenom;
    private $poid;
    private $age;
    private $mdp;
    private $adresse;
    private $email;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    //nom
    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }
    
    //prenom

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    
    public function getPoid(){
        return $this->poid;
    }

    public function setPoid($poid){
        $this->poid = $poid;
    }
    

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getMdp(){
        return $this->mdp;
    }

    public function setMdp($mdp){
        $this->mdp = $mdp;
    }


    public function getAdresse(){
        return $this->adresse;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }
    //email

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
   
}