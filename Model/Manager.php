<?php

abstract class Manager {
	protected $pdo;

	public function __construct() {
		$this->pdo = new PDO(
			'mysql:host='.DATABASE_HOST.';dbname=' . DATABASE_NAME,
			DATABASE_USER,
			DATABASE_PASSWORD
		);
		$this->pdo->setAttribute(
			PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION
		);
	}
}