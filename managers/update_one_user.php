<?php

function update_login($oldlogin, $newlogin) {
	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = mysqli_stmt_init($link);
	if ($stmt = mysqli_prepare($link, "UPDATE USERS SET login=? WHERE LOGIN=?")) {
		mysqli_stmt_bind_param($stmt, "ss", $newlogin, $oldlogin);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
}

function update_droits($login, $rang) {
	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = mysqli_stmt_init($link);
	if ($stmt = mysqli_prepare($link, "UPDATE USERS SET rang=? WHERE LOGIN=?")) {
		mysqli_stmt_bind_param($stmt, "is", $rang, $login);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
}



?>