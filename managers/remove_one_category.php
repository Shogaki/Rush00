<?php

// Doit d'abord supprimer dans la table associative

function remove_one_category($nom) {
	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = mysqli_stmt_init($link);
	if ($stmt = mysqli_prepare($link, "DELETE FROM category WHERE nom=?")) {
		mysqli_stmt_bind_param($stmt, "s", $nom);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
	return ($user);
}
?>