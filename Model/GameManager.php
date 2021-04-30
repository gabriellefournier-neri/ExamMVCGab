<?php

//CRUD = CReate Update Delete
class GameManager extends Manager {
	
	//On récupère un tableau de tous les objets User
	public function fetchAll(): array {
		$gameQuery = $this->pdo->prepare('SELECT * FROM game');
		$gameQuery->execute();
		$games = $gameQuery->fetchAll(PDO::FETCH_ASSOC);

		$gameObjects = [];
		foreach($games as $game) {
			
			$gameObjects[] = $this->convertArrayToGame($game);
		}

		return $gameObjects;
	}

	//On récupère un objet Game à partir d'un identifiant (id)
	public function fetch(int $id): ?Game {
		$query = $this->pdo->prepare('
			SELECT * FROM game
			WHERE id=?
		');

		$query->execute([
			$id
		]);

		$game = $query->fetch(PDO::FETCH_ASSOC);

		//Je n'ai rien trouvé en base de données
		if($game === false) {
			return null;
		}

		//Ici, on va créer notre objet Game
		return $this->convertArrayToGame($game);

	}

	//On programme un INSERT en base de données
	public function create(Game $game): void {
		$query = $this->pdo->prepare(
			'INSERT INTO game(title, min_players, max_players) VALUES(?, ?, ?)'
		);

		$query->execute([
			$game->getTitle(),
			$game->getMin(),
			$game->getMax()
		]);
	}

	//On programme un UPDATE en base de données
	// public function update(User $user): void {
	// 	$updateUser = $this->pdo->prepare('
	// 		UPDATE user
	// 		SET name=?, email=?
	// 		WHERE id=?
	// 	');

	// 	$updateUser->execute([
	// 		$user->getName(),
	// 		$user->getEmail(),
	// 		$user->getId()
	// 	]);
	// }

	//On programme un DELETE dans une base de données
	// public function delete(User $user): void {
	// 	$deleteUser = $this->pdo->prepare(
	// 		'DELETE FROM user WHERE id=?'
	// 	);
	// 	$deleteUser->execute([
	// 		$user->getId()
	// 	]);
	// }

	//Converti un tableau passé en paramètre en objet User
	private function convertArrayToGame(array $game): Game
	{
		$gameObject = new Game();
		$gameObject->setId($game['id']);
		$gameObject->setTitle($game['title']);
		$gameObject->setMin($game['min']);
		$gameObject->setMax($game['max']);

		return $gameObject;
	}
}
