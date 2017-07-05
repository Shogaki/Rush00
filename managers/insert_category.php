<?php

function insert_category($name) {

	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (mysqli_connect_errno()) {
		printf("Échec de la connexion : %s\n", mysqli_connect_error());

	}
	$stmt = mysqli_stmt_init($link);
	echo $name;
	if (mysqli_stmt_prepare($stmt, 'INSERT INTO category (nom) VALUES(?)')) {
		mysqli_stmt_bind_param($stmt, "s", $name);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
}

?>