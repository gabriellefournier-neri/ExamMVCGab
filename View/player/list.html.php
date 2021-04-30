<?php
	$title = "All players";
?>

<h1>All Players</h1>
<div class="card">
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Email</th>
					<th>NickName</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($players as $player) : ?>
					<tr>
						<td><?= $player->getId() ?></td>
						<td><?= $player->getEmail() ?></td>
						<td><?= $player->getNickname() ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>