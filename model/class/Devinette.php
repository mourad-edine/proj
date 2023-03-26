<?php

class Devinette{
    private $id;
    private $devinette;
    private $reponse;



    public function getId(){
        return $this->id;


    }

    public function setId($id){
        $this->id = $id;
    }

    public function getDevinette(){
        return $this->devinette;
    }

    public function getReponse(){
        return $this->reponse;


    }

    public function setDevinette($fanontaniana){
        $this->devinette = $fanontaniana;
    }

    public function setReponse($valiny){
        $this->reponse = $valiny; 
    }
}