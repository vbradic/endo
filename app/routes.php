<?php

function call($controller, $action) {
    
    require_once('controllers/' . $controller . '_controller.php');
    
    switch($controller) {
        
        case 'walls':
            require_once('app/models/walls/wall.php');
            $controller = new WallsController();
            break;
    }
    
    $controller->{ $action }();
}

$controllers = array('walls' => ['numbers', 'details']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>