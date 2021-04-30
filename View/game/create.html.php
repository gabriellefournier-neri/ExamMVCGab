<?php
	$title = "Create Game";
?>

<h1>Create Game</h1>
<div class="card">
	<div class="card-body">
		<form action="index.php?ctrl=game&method=create" method="post">
			<div class="form-group mb-3">
				<label for="title">Nom du jeu</label>
				<input type="text" name="title" id="title" class="form-control" />
			</div>
			<div class="form-group mb-3">
				<label for="min">Nom de joueur minimum</label>
				<input type="number" name="min" id="min" class="form-control" />
			</div>
			<div class="form-group mb-3">
				<label for="max">Nom de joueur maximum</label>
				<input type="number" name="max" id="max" class="form-control" />
			</div>

			<input type="submit" class="btn btn-primary" name="create" value="Create">
			<!-- <a href="index.php?ctrl=game&method=list" class="btn btn-light">Back</a> -->
		</form>
	</div>
</div>