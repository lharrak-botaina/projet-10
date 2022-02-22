<?php
include '../GestionEmployes.php';

$GestionEmployes = new GestionEmployes();

$employes = new Employe();

$employes->setNom('lharrak');
$employes->setPreNom('omar');
$employes->setDateNaissance('12/12/1998');

$GestionEmployes->Ajouter($employes);




?>



<?php 
