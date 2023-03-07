<?php

namespace App\Models_en;
use App\Models_en\Model;
class CompetenceModel extends Model{

    protected $id;
    protected $titre;
    protected $date_creation;
    protected $pourcentage;
    protected $id_candidat;
    //etablissemnt

   
  
   

    public function __construct()
    {
        $this->table = "competence";
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
}