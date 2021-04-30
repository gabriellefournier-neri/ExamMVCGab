<?php

class Game {
	private $id;
	private $title;
	private $min;
	private $max;
	
	public function getId(): ?int
	{
		return $this->id;
	}

	public function setId(int $id): void
	{
		$this->id = $id;
	}

	// -------------------TITLE-----------------------
	public function getTitle(): ?string
	{
		return $this->title;
	}

	public function setTitle(string $title): void
	{
		$this->title = htmlspecialchars($title);
	}
	// -----------------------PLAYER MIN -------------------------
	public function getMin(): ?int
	{
		return $this->min;
	}

	public function setMin(int $min): void
	{
		$this->min = htmlspecialchars($min);
	}
	// ------------------------PLAYER MAX --------------------------
	public function getMax(): ?int
	{
		return $this->max;
	}

	public function setMax(int $max): void
	{
		$this->max = htmlspecialchars($max);
	}
}