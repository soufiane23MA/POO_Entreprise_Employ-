<?php

/**
 * soit ion utilise les requieres, 
 * soit on utilise spl_automoad _resgistre,
 */

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name . '.php';
});

$elanFormation = new Entreprise('ELAN FORMATION','1993-01-01',"14 rue du Rhône",'67100','Strasbourg');
/**
 * je crée une deuxieme entreprise et stephane travaille maintent dedan
 */
$tf1 = new Entreprise('TF1','11982-01-01',"rue de la paix",'75000','PARIS');
/**
 * cration d'un nouveau employé 
 */
$stephane = new Employe ("Smail","Stephane","stephane@elan-formation.fr",$elanFormation);

//var_dump($stephane);


  //  echo $stephane;
    //echo $elanFormation;
    //echo $elanFormation-> getInfos()."<br>";
    echo $stephane->getInfos();
    $stephane -> setEntreprise ($tf1);
    echo $stephane-> getInfos();
 