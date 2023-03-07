<?php

namespace App\Models_en;
use App\Models_en\Model;
use PDO;

class OffreModel extends Model{

    protected $id;
    protected $titre;
    protected $description;
    protected $date_creation;
    protected $typeemploi;
    protected $domaine;
    protected $typedemande;
    protected $typesalaire;
    protected $salairemin;
    protected $salairemax;
    protected $competence;
    protected $adresse;
    protected $id_employeur;
    protected $id_cabinet;
    protected $date_expiration;
    protected $etat;
   

    public function __construct()
    {
        $this->table = 'offre';
    }

    function getAlldataFilter($filterData){
        //var_dump($filterData);
        $storage_filter = implode("','", $filterData);
        //var_dump($storage_filter);
       // return $this->requete("SELECT * FROM $this->table WHERE nom IN ('".$storage_filter."') ", [$storage_filter]);

        $dsn = new PDO("mysql:host=localhost;dbname=planrh_en", "root", "root");
        $dsn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
        $dsn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

        $domaine = $dsn->prepare("SELECT * FROM $this->table WHERE domaine IN ('".$storage_filter."')");
         $domaine->execute();
         return $domaine->fetchAll();

    }

    public function tous_candidats_postules_by_offre($id_employeur, $acceptation){

        return $this->requete(
            "SELECT *, candidat.nom as candidat_nom, candidat.poste as candidat_poste, 
            candidat.contact as candidat_contact, candidat.image as candidat_image, 
            postuler_candidat_offre.acceptation as acceptation 
            FROM $this->table
            INNER JOIN postuler_candidat_offre ON postuler_candidat_offre.id_offre = offre.id
            INNER JOIN candidat ON candidat.id = postuler_candidat_offre.id_candidat
            WHERE offre.id_employeur = $id_employeur AND acceptation = $acceptation
            "
        )->fetchAll();
    }

    public function tous_candidats_postules(){

        return $this->requete(
            "SELECT *, candidat.nom as candidat_nom, candidat.poste as candidat_poste, 
            candidat.contact as candidat_contact, candidat.image as candidat_image, 
            postuler_candidat_offre.acceptation as acceptation, 
            employeur.entreprise as employeur_entreprise, offre.date_creation as offre_date_creation,
            postuler_candidat_offre.id as postuler_candidat_offre_id
            FROM $this->table
            INNER JOIN postuler_candidat_offre ON postuler_candidat_offre.id_offre = offre.id
            INNER JOIN candidat ON candidat.id = postuler_candidat_offre.id_candidat
            INNER JOIN employeur ON employeur.id = offre.id_employeur
            ORDER BY offre.id DESC
            "
        )->fetchAll();
    }

    public function recupere_tous_offres(){

        return $this->requete("
        SELECT * , domaine.nom as domaine_nom, employeur.entreprise as employeur_entreprise, 
        typeemploi.nom as typeemploi_nom, employeur.image as employeur_image, offre.id as offre_id,
        offre.date_creation as offre_date_creation
        FROM $this->table 
        INNER JOIN  employeur ON offre.id_employeur = employeur.id
        INNER JOIN  domaine ON offre.domaine = domaine.id 
        INNER JOIN  typeemploi ON offre.typeemploi = typeemploi.id 
        WHERE offre.etat = 1
        ORDER BY offre.id DESC
        ")->fetchAll();
    }

    public function recupere_tous_offres_etat(){
        return $this->requete("
        SELECT * , domaine.nom as domaine_nom, employeur.entreprise as employeur_entreprise, 
        typeemploi.nom as typeemploi_nom, employeur.image as employeur_image, offre.id as offre_id,
        offre.date_creation as offre_date_creation
        FROM $this->table 
        INNER JOIN  employeur ON offre.id_employeur = employeur.id
        INNER JOIN  domaine ON offre.domaine = domaine.id 
        INNER JOIN  typeemploi ON offre.typeemploi = typeemploi.id 
        ORDER BY offre.id DESC
        ")->fetchAll();
    }

    public function recupere_toutes_offres_by_2_date($date1, $date2){

        return $this->requete('
        SELECT * , domaine.nom as domaine_nom, employeur.entreprise as employeur_entreprise, 
        typeemploi.nom as typeemploi_nom, employeur.image as employeur_image, offre.id as offre_id,
        offre.date_creation as offre_date_creation
        FROM '.$this->table.'
        INNER JOIN  employeur ON offre.id_employeur = employeur.id
        INNER JOIN  domaine ON offre.domaine = domaine.id 
        INNER JOIN  typeemploi ON offre.typeemploi = typeemploi.id 
        WHERE offre.date_creation BETWEEN  "'.$date1.'" AND  "'.$date2.'"
        AND offre.etat = 1
        ORDER BY offre.id DESC
        ')->fetchAll();
    }

    public function recupere_tous_offres_avec_limit($depart, $offre_par_page){

        return $this->requete("
        SELECT * , domaine.nom as domaine_nom, employeur.entreprise as employeur_entreprise, 
        typeemploi.nom as typeemploi_nom, employeur.image as employeur_image, offre.id as offre_id,
        offre.date_creation as offre_date_creation
        FROM $this->table 
        INNER JOIN  employeur ON offre.id_employeur = employeur.id
        INNER JOIN  domaine ON offre.domaine = domaine.id 
        INNER JOIN  typeemploi ON offre.typeemploi = typeemploi.id
        WHERE offre.etat = 1
        ORDER BY offre.id DESC LIMIT $depart, $offre_par_page
        ")->fetchAll();
    }

    public function find_offre_by_id_offre($id){

        return $this->requete("
        SELECT * , domaine.nom as domaine_nom, offre.description as offre_description FROM $this->table 
        INNER JOIN  employeur ON offre.id_employeur = employeur.id
        INNER JOIN  domaine ON offre.domaine = domaine.id
        WHERE offre.id = ?"
        , [$id])->fetch();
    }

    public function deleteoffre($offre){
        //DELETE FROM `offre` WHERE id = 2
        return $this->requete("DELETE FROM $this->table WHERE id = ?", [$offre]);
    }

    public function offre_domaine($domaine){
       // echo $domaine;
        //DELETE FROM `offre` WHERE id = 2
        $count = $this->requete("SELECT * FROM $this->table WHERE domaine = ?", [$domaine]);
        return $count = count($count->fetchAll());
    }

    public function offre_domaine_recherche($domaine){

        $recherche = $this->requete("SELECT * , domaine.nom as domaine_nom, employeur.entreprise as employeur_entreprise, 
        typeemploi.nom as typeemploi_nom, employeur.image as employeur_image, offre.id as offre_id,
        offre.date_creation as offre_date_creation
        FROM $this->table
        INNER JOIN  employeur ON offre.id_employeur = employeur.id
        INNER JOIN  domaine ON offre.domaine = domaine.id 
        INNER JOIN  typeemploi ON offre.typeemploi = typeemploi.id 
        WHERE domaine = ? AND offre.etat = 1", [$domaine]);
        return  $recherche->fetchAll();

    }

    public function offre_domaine_typeemploi($typeemploi){

        $recherche = $this->requete("SELECT * , domaine.nom as domaine_nom, employeur.entreprise as employeur_entreprise, 
        typeemploi.nom as typeemploi_nom, employeur.image as employeur_image, offre.id as offre_id,
        offre.date_creation as offre_date_creation
        FROM $this->table
        INNER JOIN  employeur ON offre.id_employeur = employeur.id
        INNER JOIN  domaine ON offre.domaine = domaine.id 
        INNER JOIN  typeemploi ON offre.typeemploi = typeemploi.id 
        WHERE typeemploi = ? AND offre.etat = 1", [$typeemploi]);
        return  $recherche->fetchAll();
    }

    public function offre_domaine_employeur($domaine, $employeur){
        //echo $domaine;
        return $this->requete("SELECT * FROM  $this->table WHERE domaine = $domaine AND id_employeur = $employeur ")->fetch();
    }

    public function offreFromUser($user){
        return $this->requete("SELECT * FROM $this->table WHERE id_employeur = ? ORDER BY id DESC", [$user])->fetchAll();
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
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Set the value of secteur
     *
     * @return  self
     */ 
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;

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
     * Get the value of date_expiration
     */ 
    public function getDate_expiration()
    {
        return $this->date_expiration;
    }

    /**
     * Set the value of date_expiration
     *
     * @return  self
     */ 
    public function setDate_expiration($date_expiration)
    {
        $this->date_expiration = $date_expiration;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}