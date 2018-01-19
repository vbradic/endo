<?php
class Wall {
    
    public $id;
    public $year;
    public $picture_path;
    public $label;
    public $description;
    
     function __construct($id, $year, $picture_path, $label, $description) {
        $this->id      = $id;
        $this->year  = $year;
        $this->picture_path = $picture_path;
        $this->label = $label;
        $this->description = $description;
    }
    
    public static function wallsPerYear($year) {
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM walls WHERE year = :year');
        $req->execute(array('year' => $year));
        
        foreach($req->fetchAll() as $wall) {
            $list[] = new Wall($wall['id'], $wall['year'], $wall['picture_path'], $wall['label'], $wall['description']);
        }
        
        return $list;      
    }
       
}