<?php

namespace App\Models;
use App\Models\Model;

class Reponse_Commentaire_Model extends Model{

    protected $id;
    protected $description;
    protected $date_creation;
    protected $auteur_id;
    protected $commentaire_forum_id;
    
    public function __construct()
    {
        $this->table = "reponse_commentaire";
    }
  
    public function reponse_commentaire_forum($id_commentaire_forum){ 
        return $this->requete(
            "SELECT *, candidat.nom as candidat_nom FROM reponse_commentaire
            INNER JOIN commentaire_forum ON commentaire_forum.id = reponse_commentaire.commentaire_forum_id
            INNER JOIN candidat ON candidat.id = reponse_commentaire.auteur_id
            WHERE commentaire_forum.id = $id_commentaire_forum
            "
        )->fetchAll();
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
     * Get the value of auteur_id
     */ 
    public function getAuteur_id()
    {
        return $this->auteur_id;
    }

    /**
     * Set the value of auteur_id
     *
     * @return  self
     */ 
    public function setAuteur_id($auteur_id)
    {
        $this->auteur_id = $auteur_id;

        return $this;
    }

    /**
     * Get the value of forum_id
     */ 
    public function getForum_id()
    {
        return $this->forum_id;
    }

    /**
     * Set the value of forum_id
     *
     * @return  self
     */ 
    public function setForum_id($forum_id)
    {
        $this->forum_id = $forum_id;

        return $this;
    }

    /**
     * Get the value of commentaire_forum_id
     */ 
    public function getCommentaire_forum_id()
    {
        return $this->commentaire_forum_id;
    }

    /**
     * Set the value of commentaire_forum_id
     *
     * @return  self
     */ 
    public function setCommentaire_forum_id($commentaire_forum_id)
    {
        $this->commentaire_forum_id = $commentaire_forum_id;

        return $this;
    }
}