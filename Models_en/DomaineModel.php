<?php

namespace App\Models_en;
use PDO;
use App\Models_en\Model;



class DomaineModel extends Model{

    protected $id;
    protected $nom;
    protected $date_creation;

    public function __construct(){
        $this->table = "domaine";
    }

    public function domaine_employeur($domaine){

         return $this->requete("SELECT * FROM $this->table WHERE id = ?", [$domaine])->fetch();
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    // function getAlldataFilter($filterData){
    //     $storage_filter = implode("','", $filterData);
    //    // return $this->requete("SELECT * FROM $this->table WHERE nom IN ('".$storage_filter."') ", [$storage_filter]);

    //     $dsn = new PDO("mysql:host=localhost;dbname=planrh", "root", "root");
    //     $dsn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
    //     $dsn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    //     $domaine = $dsn->prepare("SELECT * FROM $this->table WHERE nom IN ('".$storage_filter."')");
    //      $domaine->execute();
    //      return $domaine->fetchAll();

    // }

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