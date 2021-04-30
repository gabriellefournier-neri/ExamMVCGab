<?php
	$title = "Les utilisateurs";
?>

<h1>All users <a href="index.php?ctrl=user&method=create" class="btn btn-success">New user</a></h1>
<div class="card">
	<div class="card-body">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th class="actions">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user): ?>
					<tr>
						<td><?= $user->getId() ?></td>
						<td><?= $user->getName() ?></td>
						<td><?= $user->getEmail() ?></td>
						<td>
							<a href="index.php?ctrl=user&method=update&id=<?= $user->getId()?>" class="btn btn-primary">Edit</a>
							<a onclick="return confirm('Do you really want to delete this user?')" href="index.php?ctrl=user&method=delete&id=<?= $user->getId()?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>