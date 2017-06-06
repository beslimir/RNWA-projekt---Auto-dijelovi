<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	  case 'modeli':
        require_once('models/model.php');
		$controller = new ModeliController();
      break;
	   case 'artikli':
        require_once('models/artikli.php');
		$controller = new ArtiklController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' 		=> ['home', 'error'],
                       'posts' 		=> ['index', 'show'],
					   'modeli' => ['index', 'show'],
					   'artikli' 	=> ['index', 'show', 'deleteartikl']);

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