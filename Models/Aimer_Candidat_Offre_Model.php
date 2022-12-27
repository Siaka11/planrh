<?php

namespace App\Models;
use App\Models\Model;

class Aimer_Candidat_Offre_Model extends Model{

    protected $id;
    protected $likeoffre;
    protected $date_creation;
    protected $id_candidat;
    protected $id_offre;

    public function __construct()
    {
        $this->table = "aimer_candidat_offre";
    }

    public static function valueentre(){
        return 'merci';
    }
    public function tous_les_offres_by_id($id_offre){
        return $this->requete(
            "SELECT * FROM $this->table
            WHERE id_offre = $id_offre
            "
        )->fetchAll();
    }

    public function like_by_offre_candidat($id_offre, $id_candidat){
        
        return $this->requete(
            "SELECT * FROM $this->table
            INNER JOIN offre ON offre.id = $this->table.id_offre
            INNER JOIN candidat ON candidat.id = $this->table.id_candidat
            WHERE $this->table.id_offre = $id_offre AND $this->table.id_candidat = $id_candidat
            "
        )->fetch();
    }

    public function delete_aime($id_offre, $id_candidat){

        return $this->requete("DELETE FROM  $this->table  WHERE id_offre = $id_offre AND id_candidat = $id_candidat ");

    }

    public function findjaime(int $id_offre, int $id_user)
    {
        return $this->requete("SELECT * FROM  $this->table WHERE id_offre = $id_offre AND id_candidat = $id_user ")->fetch();
    }

    public function findjaimeAll(int $id_offre, int $id_user)
    {
        return $this->requete("SELECT * FROM  $this->table WHERE id_offre = $id_offre AND id_candidat = $id_user ")->fetchAll();
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
     * Get the value of like
     */ 
    public function getLike()
    {
        return $this->like;
    }

    /**
     * Set the value of like
     *
     * @return  self
     */ 
    public function setLike($like)
    {
        $this->like = $like;

        return $this;
    }

    /**
     * Get the value of dateheurejaime
     */ 
    public function getDateheurejaime()
    {
        return $this->dateheurejaime;
    }

    /**
     * Set the value of dateheurejaime
     *
     * @return  self
     */ 
    public function setDateheurejaime($dateheurejaime)
    {
        $this->dateheurejaime = $dateheurejaime;

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
     * Get the value of id_offre
     */ 
    public function getId_offre()
    {
        return $this->id_offre;
    }

    /**
     * Set the value of id_offre
     *
     * @return  self
     */ 
    public function setId_offre($id_offre)
    {
        $this->id_offre = $id_offre;

        return $this;
    }

    /**
     * Get the value of likeoffre
     */ 
    public function getLikeoffre()
    {
        return $this->likeoffre;
    }

    /**
     * Set the value of likeoffre
     *
     * @return  self
     */ 
    public function setLikeoffre($likeoffre)
    {
        $this->likeoffre = $likeoffre;

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