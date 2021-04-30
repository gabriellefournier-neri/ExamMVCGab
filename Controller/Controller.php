<?php

abstract class Controller {

	//Effectue le rendu d'une vue passée en paramètre
	//$view contient "user/list.html.php" par exemple
	protected function render(string $view, array $params = []): void
	{
		//Créé dynamiquement les variables dont le nom
		//est passé dans la clé des éléments du tableau
		extract($params);

		
		ob_start(); //Démarre la capture des "echo" (= output)
		//include ROOT . '/View/user/list.html.php';
		include ROOT . '/View/' . $view;
		$content = ob_get_clean();

		//J'inclus le fichier de template avec la
		//variable $content remplie
		include ROOT . '/View/template.html.php';
	}
}