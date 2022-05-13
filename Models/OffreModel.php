<?php

namespace App\Models;
use App\Models\Model;
use PDO;

class OffreModel extends Model{

    protected $id;
    protected $titre;
    protected $description;
    protected $date;
    protected $typeemploi;
    protected $secteur;
    protected $typedemande;
    protected $typesalaire;
    protected $salairemin;
    protected $salairemax;
    protected $competence;
    protected $adresse;
    protected $id_employeur;
    protected $id_cabinet;
   

    public function __construct()
    {
        $this->table = 'offre';
    }

    function getAlldataFilter($filterData){
        $storage_filter = implode("','", $filterData);
        //var_dump($storage_filter);
       // return $this->requete("SELECT * FROM $this->table WHERE nom IN ('".$storage_filter."') ", [$storage_filter]);

        $dsn = new PDO("mysql:host=localhost;dbname=planrh", "root", "root");
        $dsn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
        $dsn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $domaine = $dsn->prepare("SELECT * FROM $this->table WHERE secteur IN ('".$storage_filter."')");
         $domaine->execute();
         return $domaine->fetchAll();

    }

    public function deleteoffre($offre){
        //DELETE FROM `offre` WHERE id = 2
        return $this->requete("DELETE FROM $this->table WHERE id = ?", [$offre]);
    }

    public function offreFromUser($user){
        return $this->requete("SELECT * FROM $this->table WHERE id_employeur = ?", [$user])->fetchAll();
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
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of typeemploi
     */ 
    public function getTypeemploi()
    {
        return $this->typeemploi;
    }

    /**
     * Set the value of typeemploi
     *
     * @return  self
     */ 
    public function setTypeemploi($typeemploi)
    {
        $this->typeemploi = $typeemploi;

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
     * Get the value of typedemande
     */ 
    public function getTypedemande()
    {
        return $this->typedemande;
    }

    /**
     * Set the value of typedemande
     *
     * @return  self
     */ 
    public function setTypedemande($typedemande)
    {
        $this->typedemande = $typedemande;

        return $this;
    }

    /**
     * Get the value of typesalaire
     */ 
    public function getTypesalaire()
    {
        return $this->typesalaire;
    }

    /**
     * Set the value of typesalaire
     *
     * @return  self
     */ 
    public function setTypesalaire($typesalaire)
    {
        $this->typesalaire = $typesalaire;

        return $this;
    }

    /**
     * Get the value of salairemin
     */ 
    public function getSalairemin()
    {
        return $this->salairemin;
    }

    /**
     * Set the value of salairemin
     *
     * @return  self
     */ 
    public function setSalairemin($salairemin)
    {
        $this->salairemin = $salairemin;

        return $this;
    }

    /**
     * Get the value of salairemax
     */ 
    public function getSalairemax()
    {
        return $this->salairemax;
    }

    /**
     * Set the value of salairemax
     *
     * @return  self
     */ 
    public function setSalairemax($salairemax)
    {
        $this->salairemax = $salairemax;

        return $this;
    }

    /**
     * Get the value of competence
     */ 
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set the value of competence
     *
     * @return  self
     */ 
    public function setCompetence($competence)
    {
        $this->competence = $competence;

        return $this;
    }

   
    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

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
     * Get the value of id_cabinet
     */ 
    public function getId_cabinet()
    {
        return $this->id_cabinet;
    }

    /**
     * Set the value of id_cabinet
     *
     * @return  self
     */ 
    public function setId_cabinet($id_cabinet)
    {
        $this->id_cabinet = $id_cabinet;

        return $this;
    }
}