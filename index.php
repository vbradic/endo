<?php
  require_once('app/connection.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
    
    if(isset($_GET['year'])) {
        $year = $_GET['year'];
        var_dump($year);
        
    }
    
  } else {
    $controller = 'pages';
    $action     = 'home';
  }

  require_once('app/views/layout.php');
?>