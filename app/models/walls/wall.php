<?php
class Wall {
    
    public $id;
    public $categorie;
    public $picture_path;
    public $description;
    public $details;
     
    
    function __construct($id, $categorie, $picture_path, $description, $details) {
        $this->id      = $id;
        $this->categorie  = $categorie;
        $this->picture_path = $picture_path;
        $this->description = $description;
        $this->details = $details;
    }
    
    public static function headWallsPerCategorie($categorie) {
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM walls WHERE categorie = :categorie AND head_image=1 ORDER BY id DESC');
        $req->execute(array('categorie' => $categorie));
        
        foreach($req->fetchAll() as $wall) {
            $list[] = new Wall($wall['id'], $wall['categorie'], $wall['picture_path'], $wall['description'], $wall['details']);
        }
        
        return $list;      
    }
    
    public static function imagesPerId($id) {
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM walls WHERE main_wall_id = :id ORDER BY picture_path DESC');
        $req->execute(array('id' => $id));
        
        foreach($req->fetchAll() as $wall) {
            $list[] = new Wall($wall['id'], $wall['categorie'], $wall['picture_path'], $wall['description'], $wall['details']);
        }
        
        return $list; 
        
    }
    
    
       
}