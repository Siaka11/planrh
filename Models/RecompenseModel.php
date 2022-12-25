<?php

namespace App\Models;
use App\Models\Model;

class RecompenseModel extends Model{

    protected $id;
    protected $titre;
    protected $Institution;
    protected $description;
    protected $date_creation;
    protected $datedebut;
    protected $datefin;
    protected $id_candidat;
   

    public function __construct()
    {
        $this->table = "recompense";
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
     * Get the value of Institution
     */ 
    public function getInstitution()
    {
        return $this->Institution;
    }

    /**
     * Set the value of Institution
     *
     * @return  self
     */ 
    public function setInstitution($Institution)
    {
        $this->Institution = $Institution;

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

    /**
     * Get the value of id_candidats
     */ 
    public function getId_candidat()
    {
        return $this->id_candidat;
    }

    /**
     * Set the value of id_candidats
     *
     * @return  self
     */ 
    public function setId_candidat($id_candidats)
    {
        $this->id_candidat = $id_candidats;

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