<?php

namespace App\Models;
use App\Models\Model;

class OffresModel extends Model{

    protected $id;
    protected $libelle;
    protected $poste;
    protected $datefin;
    protected $datedebut;
    protected $typedecontrat;
    protected $dureedecontrat;
    protected $localisation;
    protected $decriptionposte;
    protected $prerequis;
    protected $id_candidat;
    protected $id_employeur;
    protected $datefinid_cabinet;
    

    public function __construct(){
        $this->table = 'offres';
    }
    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

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
     * Get the value of poste
     */ 
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set the value of poste
     *
     * @return  self
     */ 
    public function setPoste($poste)
    {
        $this->poste = $poste;

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
     * Get the value of typedecontrat
     */ 
    public function getTypedecontrat()
    {
        return $this->typedecontrat;
    }

    /**
     * Set the value of typedecontrat
     *
     * @return  self
     */ 
    public function setTypedecontrat($typedecontrat)
    {
        $this->typedecontrat = $typedecontrat;

        return $this;
    }

    /**
     * Get the value of dureedecontrat
     */ 
    public function getDureedecontrat()
    {
        return $this->dureedecontrat;
    }

    /**
     * Set the value of dureedecontrat
     *
     * @return  self
     */ 
    public function setDureedecontrat($dureedecontrat)
    {
        $this->dureedecontrat = $dureedecontrat;

        return $this;
    }

    /**
     * Get the value of localisation
     */ 
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set the value of localisation
     *
     * @return  self
     */ 
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get the value of decriptionposte
     */ 
    public function getDecriptionposte()
    {
        return $this->decriptionposte;
    }

    /**
     * Set the value of decriptionposte
     *
     * @return  self
     */ 
    public function setDecriptionposte($decriptionposte)
    {
        $this->decriptionposte = $decriptionposte;

        return $this;
    }

    /**
     * Get the value of prerequis
     */ 
    public function getPrerequis()
    {
        return $this->prerequis;
    }

    /**
     * Set the value of prerequis
     *
     * @return  self
     */ 
    public function setPrerequis($prerequis)
    {
        $this->prerequis = $prerequis;

        return $this;
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
     * Get the value of id_employeur
     */ 
    public function getId_employeur()
    {
        return $this->id_employeur;
    }

    /**
     * Set the value of id_employeur
     *
     * @return  self
     */ 
    public function setId_employeur($id_employeur)
    {
        $this->id_employeur = $id_employeur;

        return $this;
    }

    /**
     * Get the value of datefinid_cabinet
     */ 
    public function getDatefinid_cabinet()
    {
        return $this->datefinid_cabinet;
    }

    /**
     * Set the value of datefinid_cabinet
     *
     * @return  self
     */ 
    public function setDatefinid_cabinet($datefinid_cabinet)
    {
        $this->datefinid_cabinet = $datefinid_cabinet;

        return $this;
    }
}