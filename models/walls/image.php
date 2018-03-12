<?php
class Image {
    
    public $id;
    public $path;
    
    public function __construct($id, $path) {
        $this->id      = $id;
        $this->path  = $path;       
    }
    
    public static function find($id) {
    
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM images WHERE id = :id');
        
        $req->execute(array('id' => $id));
        $image = $req->fetch();
        
        return new Image($image['id'], $image['path']);
    }
    
    
}