<?php
class PagesController {
    public function home() {       
        require_once('app/views/pages/home.php');
    }
    
    public function walls() { 
        require_once('app/views/pages/walls.php');
    }
       
    public function error() {
        //require_once('views/pages/error.php');
    }
}
?>