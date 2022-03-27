<?php

namespace App\Models;
use App\Models\Model;

class ExperienceModel extends Model{

    protected $id;
    protected $titre;
    protected $description;
    protected $datedebut;
    protected $datefin;
    protected $id_candidats;
    //etablissemnt

   
  
   

    public function __construct()
    {
        $this->table = "experience";
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
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get the value of etablissement
     */ 
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set the value of etablissement
     *
     * @return  self
     */ 
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get the value of id_candidats
     */ 
    public function getId_candidats()
    {
        return $this->id_candidats;
    }

    /**
     * Set the value of id_candidats
     *
     * @return  self
     */ 
    public function setId_candidats($id_candidats)
    {
        $this->id_candidats = $id_candidats;

        return $this;
    }

    /**
     * Get the value of datedebut
     */ 
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set the value of datedebut
     *
     * @return  self
     */ 
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get the value of datefin
     */ 
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set the value of datefin
     *
     * @return  self
     */ 
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }
}
