<?php

class GameController extends Controller
{
	public function list() {
		$gameManager = new GameManager();
		$games = $gameManager->fetchAll();
		
		$this->render('game/list.html.php', [
			'games' => $games
		]);

	}

	public function create() {
		//J'ai cliqué sur le bouton "Create"
		if(isset($_POST['create'])) {
			//Je créé une nouvelle instance de User
			$newGame = new Game();

			//J'appelle les setters de la classe User
			$newGame->setTitle($_POST['title']);
			$newGame->setMin($_POST['min']);
			$newGame->setMax($_POST['max']);

			//Je créé une nouvelle instance de UserManager
			$gameManager = new GameManager();
			$gameManager->create($newGame);

			header('Location: index.php?ctrl=game&method=create');
			die;
		}

		$this->render('game/create.html.php');
	}

	// public function update() {
	// 	//Je récupère le paramètre "id" de l'URL
	// 	$idUser = $_GET['id'];

	// 	//Je crée une nouvelle instance de UserManager
	// 	$userManager = new UserManager();

	// 	//Je récupère l'utilisateur depuis la base de données
	// 	$updateUser = $userManager->fetch($idUser);

	// 	if(isset($_POST['update'])) {
	// 		//J'appelle les setters de la classe User
	// 		$updateUser->setEmail($_POST['email']);
	// 		$updateUser->setName($_POST['name']);

	// 		//Je viens déclencher un UPDATE en base de données
	// 		$userManager->update($updateUser);

	// 		//Je redirige l'utilisateur vers la liste des utilisateurs
	// 		header('Location: index.php?ctrl=user&method=list');
	// 		die;
	// 	}

	// 	$this->render('user/update.html.php', [
	// 		'user' => $updateUser
	// 	]);
	// }

	// public function delete() {
	// 	//Je récupère le paramètre "id" de l'URL
	// 	$idUser = $_GET['id'];

	// 	//Je démarrre mon UserManager
	// 	$userManager = new UserManager();

	// 	//Je viens déclencher un SELECT en base de données
	// 	$deleteUser = $userManager->fetch($idUser);

	// 	//Je viens déclencher un DELETE en base de données
	// 	$userManager->delete($deleteUser);

	// 	//Je redirige l'utilisateur vers la liste des utilisateurs
	// 	header('Location: index.php?ctrl=user&method=list');
	// 	die;
	// }
}



