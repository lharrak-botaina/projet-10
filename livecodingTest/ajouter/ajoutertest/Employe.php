<?php
class Employe{
    private $Id;
    private $nom;
    private $prenom;
    private $DateNaissance;



    public function getId(){
        return $this->Id;
    }
    public function setId($Id){
        $this->Id=$Id;
    }


    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }


    public function getPreNom(){
        return $this->prenom;
    }
    public function setPreNom($prenom){
        $this->prenom=$prenom;
    }


    public function getDateNaissance(){
        return $this->DateNaissance;
    }
    public function setDateNaissance($DateNaissance){
        $this->DateNaissance=$DateNaissance;
    }




}




?>