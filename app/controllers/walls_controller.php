<?php
class WallsController {
     
    function __construct() {}
    
    public function numbers() { 
                   
        $numbers = "numbers";
        $wall_list = Wall::wallsPerCategorie($numbers);
        require_once('app/views/walls/walls-fluid.php');
    }
    
    public function details() {
        
        require_once('app/views/walls/img-details.php');
    }
       
    public function error() {
        //require_once('views/walls/error.php');
    }
}
?>