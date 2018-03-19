<?php
class PagesController {
    
    function __construct() {}
    
    public function home() {
        require_once('app/views/home.php');
    }
    
    
}