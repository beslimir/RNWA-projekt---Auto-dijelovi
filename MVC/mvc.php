<?php
  require_once('connection.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'home';
  }

	if($controller == 'modeli' || $controller == 'artikli')
		require_once('views/details.php');
    else{
		require_once('views/layout.php');
    }
?>