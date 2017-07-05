<?php

function get_all_categories() {
	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = mysqli_stmt_init($link);
	if ($stmt = mysqli_prepare($link, "SELECT id, nom FROM category")) {
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $id, $name);
		$categories = array();
		while (mysqli_stmt_fetch($stmt)) {
			$categories[] = array("id" => $id, "nom" => $name); 
		}
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
	return ($categories);
}
?>