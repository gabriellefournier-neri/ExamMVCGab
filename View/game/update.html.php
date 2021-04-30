<?php
	$title = "Edit user";
?>

<h1>Edit <?= $user->getName(); ?></h1>
<div class="card">
	<div class="card-body">
		<form action="index.php?ctrl=user&method=update&id=<?= $user->getId() ?>" method="post">
			<div class="form-group mb-3">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="form-control" value="<?= $user->getEmail() ?>" />
			</div>
			<div class="form-group mb-3">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control" value="<?= $user->getName() ?>" />
			</div>

			<input type="submit" class="btn btn-primary" name="update" value="Update">
			<a href="index.php?ctrl=user&method=list" class="btn btn-light">Back</a>
		</form>
	</div>
</div>