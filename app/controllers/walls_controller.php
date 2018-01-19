<?php
class WallsController {
     
    public $year;
    
    function __construct($year) {
        $this->year = $year;
    }
    
    public function walls() { 
            
        $wall_list = Wall::wallsPerYear($this->year);
        require_once('app/views/walls/walls.php');
    }
       
    public function error() {
        //require_once('views/walls/error.php');
    }
}
?>