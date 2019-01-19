<?php

    ini_set( 'display_errors', 1 );

    require_once "/var/www/form/config/database.php";
    require_once "/var/www/form/app/Controllers/FormController.php";
    require_once "/var/www/form/app/Controllers/MessageaddController.php";

    $params = array();
    if ('' != $_SERVER['REQUEST_URI']) {
      $params = explode('/', $_SERVER['REQUEST_URI']);
    }

    $controller = 'index';
    if (0 < count($params)) {
      $controller = $params[1];
    }

    $controllerInstance = null;
    switch ($controller) {
      case 'form':
        $controllerInstance = new FormController();
        break;
      case 'messageadd':
        $controllerInstance = new MessageaddController();
        break;
      default:
        header("HTTP/1.0 404 Not Found");
        exit;
        break;
    }
?>
