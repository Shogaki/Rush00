<?php

function get_one_user($login) {
	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = mysqli_stmt_init($link);
	if ($stmt = mysqli_prepare($link, "SELECT id, login, email, password, level, rang FROM USERS WHERE LOGIN=?")) {
		mysqli_stmt_bind_param($stmt, "s", $login);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $id, $login_bd, $email, $password, $level, $rang);
		mysqli_stmt_fetch($stmt);
		$user = array("id" => $id, "login" => $login_bd, "email" => $email, "password" => $password, "level" => $level, "rang" => $rang); 
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
	return ($user);
}
?>