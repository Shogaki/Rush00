<?php

function get_all_users() {
	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = mysqli_stmt_init($link);
	if ($stmt = mysqli_prepare($link, "SELECT id, login, email, level, rang FROM USERS ORDER BY rand()")) {
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $id, $login, $email, $level, $rang);
		$users = array();
		while (mysqli_stmt_fetch($stmt)) {
			$users[] = array("id" => $id, "login" => $login, "email" => $email, "level" => $level, "rang" => $rang); 
		}
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
	return ($users);
}
?>