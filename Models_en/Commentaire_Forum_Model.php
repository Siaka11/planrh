<?php

namespace App\Models_en;
use App\Models_en\Model;

class Commentaire_Forum_Model extends Model{

    protected $id;
    protected $description;
    protected $date_creation;
    protected $auteur_id;
    protected $forum_id;
    
    public function __construct()
    {
        $this->table = "commentaire_forum";
    }
  
    public function commentaire_forum($id_forum){
        
        return $this->requete(
            "SELECT *, forum.id as forum_id, forum.description as forum_description, commentaire_forum.id as commentaire_id_for FROM $this->table
            INNER JOIN forum ON forum.id = $this->table.forum_id
            INNER JOIN candidat ON candidat.id = $this->table.auteur_id
            WHERE forum_id = $id_forum
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
}