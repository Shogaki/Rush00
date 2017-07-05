<?php

function update_one_category($oldname, $newname) {
	$link = mysqli_connect("localhost", "root", "root", "rush");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$stmt = mysqli_stmt_init($link);
	if ($stmt = mysqli_prepare($link, "UPDATE CATEGORY SET nom=? WHERE nom=?")) {
		mysqli_stmt_bind_param($stmt, "ss", $newname, $oldname);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	mysqli_close($link);
	return ($user);
}
?>