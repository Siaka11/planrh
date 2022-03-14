<?php

namespace App\Models;
use App\Models\Model;

class JaimeModel extends Model{

    protected $id;
    protected $likeoffre;
    protected $dateheurejaime;
    protected $id_candidat;
    protected $id_offre;

    public function __construct()
    {
        $this->table = "jaimeoffre";
    }

    public function findjaimechoix(){
        return $this->requete(
            "SELECT * FROM jaimeoffre
            INNER JOIN offre ON offre.id = jaimeoffre.id_offre
            INNER JOIN candidat ON candidat.id = jaimeoffre.id_candidat"
        )->fetchAll();
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
}