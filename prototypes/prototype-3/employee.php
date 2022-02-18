<?php
class employee{
    private $id;
    private $firstName;
    private $lastName;
    private $gender;

    public function getId(){
        return $this->id;
    }
    public function setId($value){
        $this->id=$value;
    }

    public function getfirstName(){
        return $this->firstName;
    }
    public function setfirstName($value){
        $this->firstName=$value;
    }

    public function getlastName(){
        return $this->lastName;
    }
    public function setlastName($value){
        $this->lastName=$value;
    }

    public function getgender(){
        return $this->gender;
    }
    public function setgender($value){
        $this->gender=$value;
    }






}

?>
