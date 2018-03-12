<?php
class WallsController {
     
    function __construct() {}
    
    public function numbers() { 
                   
        $numbers = "numbers";
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $wall_list = Wall::imagesPerId($id);
        } else {
            $wall_list = Wall::headWallsPerCategorie($numbers);
        }
        
        require_once('app/views/walls/walls-fluid.php');
    }
    
    public function zutaKompanija(){
        
        $zuta_kompanija = "zuta_kompanija";
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $wall_list = Wall::imagesPerId($id);
        } else {
            $wall_list = Wall::headWallsPerCategorie($zuta_kompanija);
        }
        
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