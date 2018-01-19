<?php

function call($controller, $action, $year) {
    
    require_once('controllers/' . $controller . '_controller.php');
    
    switch($controller) {
        
        case 'walls':
            require_once('app/models/walls/wall.php');
            $controller = new WallsController($year);
            break;
    }
    
    $controller->{ $action }();
}

$controllers = array('walls' => ['walls']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action, $year);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>