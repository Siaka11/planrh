<?php

namespace App\Models_en;
use App\Models_en\Model;
class ActualitesModel extends Model{

    protected $id;
    protected $titre;
    protected $date_creation;
    protected $image;
    protected $description;


    public function __construct()
    {
        $this->table = "actualites";
    }

    

    public function limite_actualite_nvlle_version(){
        return $this->requete("
        SELECT * 
        FROM $this->table 
        LIMIT $fin OFFSET $depart
        ")->fetchAll();
    }

    public function limite_actualite_une(){
        return $this->requete("
        SELECT * FROM $this->table ORDER BY id DESC
        LIMIT 0,4
        ")->fetchAll();
    }

    public function derniere_actualite(){
        return $this->requete("
        SELECT * FROM $this->table ORDER BY id DESC
        LIMIT 0,1
        ")->fetch();
    }
    public function actualite_autre(){
        return $this->requete("
        SELECT * FROM $this->table ORDER BY id DESC
        LIMIT 4,3
        ")->fetchAll();
    }

    public function actualite_autre_premier(){
        return $this->requete("
        SELECT * FROM $this->table ORDER BY id DESC
        LIMIT 4,1
        ")->fetch();
    }
    /**
     * Get the value of id_candidat
     */ 
    public function getId_candidat()
    {
        return $this->id_candidat;
    }

    /**
     * Set the value of id_candidat
     *
     * @return  self
     */ 
    public function setId_candidat($id_candidat)
    {
        $this->id_candidat = $id_candidat;

        return $this;
    }

    /**
     * Get the value of pourcentage
     */ 
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set the value of pourcentage
     *
     * @return  self
     */ 
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
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
}