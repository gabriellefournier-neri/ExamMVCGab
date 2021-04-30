<?php

function model(): array {
	return [
		["id" => 1, "name" => "Elon Musk", "email" => "elon@tesla.com"],
		["id" => 2, "name" => "Donald Trump", "email" => "donal@trump.com"],
	];
}

function view(array $users): void {
	echo "<ul>";
	foreach($users as $user) {
		echo "<li>".$user['name']."</li>";
	}
	echo "</ul>";
}

function controller(): void {
	$users = model();
	view($users);
}

controller();