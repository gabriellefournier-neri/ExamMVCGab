<?php

class PostManager extends Manager {


	public function fetchAll(): array {
		$postQuery = $this->pdo->prepare('SELECT * FROM post');
		$postQuery->execute();
		$posts = $postQuery->fetchAll(PDO::FETCH_ASSOC);

		$postObjects = [];

		//Je créé une instance de UserManager pour récupérer 
		//mes objets utilisateurs
		$userManager = new UserManager();
		foreach($posts as $post) {
			$idUser = $post['created_by'];
			$createdByObject = $userManager->fetch($idUser);
			
			$postObject = new Post();
			$postObject->setId($post['id']);
			$postObject->setContent($post['content']);
			$postObject->setCreatedAt(new DateTime($post['created_at']));
			$postObject->setCreatedBy($createdByObject);

			$postObjects[] = $postObject;
		}

		return $postObjects;
	}

	public function fetch(int $id): ?Post
	{

	}

	public function create(Post $post): void
	{

	}

	public function update(Post $post): void
	{
		
	}

	public function delete(Post $post): void
	{
		
	}
}