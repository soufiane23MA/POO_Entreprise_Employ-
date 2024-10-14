<?php
/**
 * déclaration classe employe
 */

class Employe {
    private string $nom;
    private string $prenom;
    private string $email;
    private Entreprise $entreprise;

    public function __construct(string $nom, string $prenom, string $email, Entreprise $entreprise){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this -> email = $email;
        $this -> entreprise = $entreprise;
        $this -> entreprise-> addEmploye($this);// cette entreprise doit rajouter l'employé
        // que je suis entrain de construir


}

    


    /**
     * mise en place des getter et des setter
     */ 

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
           return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    /**
     * on rajoute la propritée Entreprise qui est 
     * consideré comme OBjet !!
     */

    public function getEntreprise(): Entreprise
    {
            return $this->entreprise;
    }

    public function setEntreprise( Entreprise $entreprise)
    {
            $this->entreprise = $entreprise;

            return $this;
    }

    public function __toString(){
        return $this->getprenom() ." ". $this -> getnom()."<br>"
        .$this -> getEmail()."<br>";
    }
    public function getInfos(){
        return $this ." <br>  travaille chez <br>". $this ->entreprise->getraisonSociale();
    }
    

         
      
}