<?php

namespace App\Models;
use App\Models\Model;

class FormationModel extends Model{

    protected $id;
    protected $titre;
    protected $annee;
    protected $etablissement;
    protected $description;
    protected $id_candidat1;

    public function __construct()
    {
        $this->table = "formation";
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
     * Get the value of id_candidat
     */ 
    public function getId_candidat1()
    {
        return $this->id_candidat1;
    }

    /**
     * Set the value of id_candidat
     *
     * @return  self
     */ 
    public function setId_candidat1($id_candidat)
    {
        $this->id_candidat1 = $id_candidat;

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
}