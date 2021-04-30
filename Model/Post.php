<?php

class Post {
	private $id;
	private $created_by;
	private $content;
	private $created_at;

	/**
	 * Get the value of id
	 */ 
	public function getId(): ?int
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */ 
	public function setId(int $id)
	{
		$this->id = $id;

		return $this;
	}

	public function getContent() {
		return $this->content;
	}

	public function setContent(string $content) {
		$this->content = $content;
	}

	public function getCreatedBy(): User
	{
		return $this->created_by;
	}

	public function setCreatedBy(User $created_by) {
		$this->created_by = $created_by;
	}

	public function getCreatedAt(): DateTime {
		return $this->created_at;
	}

	public function setCreatedAt(DateTime $created_at): void {
		$this->created_at = $created_at;
	}
}