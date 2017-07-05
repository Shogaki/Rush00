<?php

function insert_user($login, $password, $email, $level, $permission, $categories) {

	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (mysqli_connect_errno()) {
		printf("Échec de la connexion : %s\n", mysqli_connect_error());

	}
	$stmt = mysqli_stmt_init($link);
	if (mysqli_stmt_prepare($stmt, 'INSERT INTO users (login, email, password, level, rang) VALUES(?, ?, ?, ?, ?)')) {
		mysqli_stmt_bind_param($stmt, "sssii", $login, $email, $password, $level, $permission);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}	

	$id = mysqli_insert_id($link);
	foreach($categories as $cat) {
		$stmt = mysqli_stmt_init($link);
		if (mysqli_stmt_prepare($stmt, 'INSERT INTO cat_assoc (id_user, id_cat) VALUES(?, ?)')) {
			mysqli_stmt_bind_param($stmt, "ii", $id, $cat);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_close($stmt);
		}
	}
	mysqli_close($link);
}

?>