<?php
class Wall {
    
    public $id;
    public $categorie;
    public $picture_path;
    public $label;
    public $description;
    
    function __construct($id, $categorie, $picture_path, $label, $description) {
        $this->id      = $id;
        $this->categorie  = $categorie;
        $this->picture_path = $picture_path;
        $this->label = $label;
        $this->description = $description;
    }
    
    public static function wallsPerCategorie($categorie) {
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM walls WHERE categorie = :categorie');
        $req->execute(array('categorie' => $categorie));
        
        foreach($req->fetchAll() as $wall) {
            $list[] = new Wall($wall['id'], $wall['categorie'], $wall['picture_path'], $wall['label'], $wall['description']);
        }
        
        return $list;      
    }
       
}