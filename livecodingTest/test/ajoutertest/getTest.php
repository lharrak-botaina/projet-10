<?php
include '../GestionEmployes.php';

$GestionEmployes = new GestionEmployes();
$data = $GestionEmployes->RechercherTous();


foreach($data as $employes){
    echo $employes -> getNom();
    echo '<br>';
    echo $employes -> getPreNom();
    echo '<br>';
    echo $employes -> getDateNaissance();
};


?>



