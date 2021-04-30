<?php

define('ROOT', __DIR__);

require_once ROOT . '/config.php';

spl_autoload_register(function($className) {
	if(file_exists(ROOT . '/Controller/' . $className . ".php")) {
		require ROOT . '/Controller/' . $className . ".php";
	} elseif(file_exists(ROOT . '/Model/' . $className . ".php")) {
		require ROOT . '/Model/' . $className . ".php";
	}
});


//On récupère le paramètre "ctrl" de l'URL
$ctrl = "home";
if(isset($_GET['ctrl'])) {
	$ctrl = $_GET['ctrl'];
}

//On récupère le paramètre "method" de l'URL
$method = $_GET['method'] ?? "hello";

//On instancie le bon contrôleur en fonction du paramètre $_GET
switch($ctrl) {
	case 'home':
		$controller = new HomeController();
	break;
	case 'game':
		$controller = new GameController();
	break;
	case 'player':
		$controller = new PlayerController();
	break;
	case 'contest':
		$controller = new ContestController();
	break;
	default:
		$controller = null;
	break;
}

if(null === $controller || !method_exists($controller, $method)) {
	http_response_code(404);
	echo "404 Looser";
	exit; 
}


$controller->$method();

