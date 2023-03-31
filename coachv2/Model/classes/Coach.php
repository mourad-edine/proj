<?php

class Coach{
    private $id;
    private $nom;
    private $prenom;
    private $specialite;
    private $prix;
    private $programme_id;
    private $numero;
    private $email;

    //id
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
    

    //specialite
    public function getSpecialite(){
        return $this->specialite;
    }

    public function setSpecialite($specialite){
        $this->specialite = $specialite;
    }
    
    //prix
    public function getPrix(){
        return $this->prix;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }
    //programme id
    public function getProgramme_id(){
        return $this->programme_id;
    }

    public function setProgramme_id($programme_id){
        $this->programme_id = $programme_id;
    }
    //numero

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
    //email

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    
    
}



//(`id`, `nom`, `specialite`, `prix`, `programme_id`, `prenom`, `numero`, `email`)