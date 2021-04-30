<?php

class PostController extends Controller {
	public function list() {
		//Je créé une instance de PostManager
		$postManager = new PostManager();

		//Je déclenche un SELECT dans la base de données
		$posts = $postManager->fetchAll();

		//J'affiche ma vue
		$this->render('post/list.html.php', [
			'posts' => $posts
		]);
	}

	public function save() {

	}

	public function delete() {

	}
}