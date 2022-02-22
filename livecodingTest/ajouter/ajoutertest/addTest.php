<?php
include 'GestionEmployes.php';
include 'Employe.php';

$GestionEmployes = new GestionEmployes();

$employes = new Employe();

$employes->setNom('lharrak');
$employes->setPreNom('omarAAA');
$employes->setDateNaissance('12/12/1998');

$GestionEmployes->Ajouter($employes);




?>