<?php
/**
 * délaration class entreprise et le constructeur
 */

class Entreprise {

private string $raisonSociale;
private DateTime $dateCreation;
private string $adresse;
private string $cp;
private string $ville;
private array $employes;

public function __construct(string $raisonSociale,string $dateCreation, string $adresse, string $cp, string $ville){

    $this ->raisonSociale = $raisonSociale;
    $this ->dateCreation = new DateTime($dateCreation);
    $this ->adresse = $adresse;
    $this ->cp= $cp;
    $this ->ville = $ville;
    $this ->employes = [];

    
    /**
     * mise en place les getter et les setter.
     */
}

public function getRaisonSociale() : string {
    return $this ->raisonSociale; 
}
public function setRaisonSociale($raisonSociale){
    $this->raisonSociale = $raisonSociale;
    return $this ; 
}

public function getDateCreation(): DateTime{
    return $this ->dateCreation ; 
}
public function setDateCreation($dateCreation){
    $this-> dateCreation = $dateCreation;
    return $this;
     
}
public function getAdresse() : string {
    return $this ->adresse; 
     
}
public function setAdresse($adresse){
    $this->adresse = $adresse;
    return $this;
}

public function getCp() : string {
    return $this ->cp; 
}
public function setCp($cp){
    $this-> cp = $cp;
    return $this;
}
public function getVille() : string {
    return $this;
}
public function setVille($ville){
    $this->ville = $ville;
    return $this;
}
public function getAdresseComplete (){
    return  $this -> adresse."".$this ->cp."".$this ->ville; 
}
/**
 * cette methode affiche tous les infos 
 */
public function getInfos(){

    return  /*$this -> getRaisonSociale().*/'<br>'.
    $this -> getAdresse().'<br>'.
    $this -> getCp().'<br>'.
     "est crée le ". $this->getDateCreation() ->format("d.M.y");
}
public function getEmployes()
{
    return $this->employes;
}

public function setEmployes($employes)
{
    $this->employes = $employes;

    return $this;
}
public function addEmploye(Employe $employe){
    $this->employes [] = $employe;
    //arry.push(this ->employes,$employe );

}

/**
 * tostring permet d'afficher le plus important dans la classe
 * on met pas l'intégralité des propriétés de la classe
 * bien de l'utiliser quand on veux recuperer 
 * et afficher les element d'un tableaux
 */
public function __toString(){
    return $this->getRaisonSociale() ." (". $this -> getDateCreation()->format("Y").")";
}



};