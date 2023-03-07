<?php

namespace App\Models_en;
use App\Models_en\Model;

class EmployeurModel extends Model{

    protected $id;
    protected $nom;
    // protected $prenom;
    protected $motdepasse;
    protected $email;
    protected $entreprise;
    protected $date_creation;
    protected $telephone;
    protected $secteur;
    protected $web;
    protected $description;
    protected $facebook;
    protected $twitter;
    protected $linkedin;
    protected $youtube;
    protected $siege;
    protected $image;
    protected $couverture;

    public function __construct()
    {
        $this->table = "employeur";
       

    }
    
    public function retrievedatafromprofil($id){

        return $this->requete("SELECT * FROM $this->table WHERE id = $id")->fetch();
    }

    public function deleteoffre($offre){
        //DELETE FROM `offre` WHERE id = 2
        return $this->requete("DELETE * FROM $this->table WHERE id = ?", [$offre]);
    }


    public function findOneByEmail(string $email)
    {
        return $this->requete('SELECT * FROM ' . $this->table . ' WHERE email = ?', [$email])->fetch();
    }

    public function findOneByPassword(string $password)
    {
        return $this->requete('SELECT password FROM ' . $this->table . ' WHERE email = ?', [$password])->fetch();
    }

    public function setSession()
    {
        $_SESSION['useremployeur'] = [
            'id' => $this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'motdepasse' => $this->motdepasse,
            'email' => $this->email,
            'pseudo' => $this->pseudo
        ];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of motdepasse
     */ 
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * Set the value of motdepasse
     *
     * @return  self
     */ 
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

   
    /**
     * Get the value of entreprise
     */ 
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set the value of entreprise
     *
     * @return  self
     */ 
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get the value of datecreation
     */ 
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set the value of datecreation
     *
     * @return  self
     */ 
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of secteur
     */ 
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set the value of secteur
     *
     * @return  self
     */ 
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get the value of web
     */ 
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set the value of web
     *
     * @return  self
     */ 
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of facebook
     */ 
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set the value of facebook
     *
     * @return  self
     */ 
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get the value of twitter
     */ 
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set the value of twitter
     *
     * @return  self
     */ 
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get the value of linkedin
     */ 
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set the value of linkedin
     *
     * @return  self
     */ 
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get the value of youtube
     */ 
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Set the value of youtube
     *
     * @return  self
     */ 
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get the value of siege
     */ 
    public function getSiege()
    {
        return $this->siege;
    }

    /**
     * Set the value of siege
     *
     * @return  self
     */ 
    public function setSiege($siege)
    {
        $this->siege = $siege;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of date_creation
     */ 
    public function getDate_creation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDate_creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get the value of couverture
     */ 
    public function getCouverture()
    {
        return $this->couverture;
    }

    /**
     * Set the value of couverture
     *
     * @return  self
     */ 
    public function setCouverture($couverture)
    {
        $this->couverture = $couverture;

        return $this;
    }
}