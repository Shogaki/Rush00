<?php if (isset($_GET["deco"])) {
	session_destroy();
	header("Refresh:0; url=index.php?page=0");
	
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Adopte un mate</title>
		<link rel="stylesheet" href="rush.css" charset="utf-8">
		<link rel="stylesheet" href="panier.css" charset="utf-8">
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<a href="index.php?page=0"><img src="resources/Logo.png"></a>
			</div>
			<div class="panier">
				<a href="index.php?page=4"><img class="imgpanier" src="resources/panier.png"></a>
				<div class="info_panier" style="height: 35px; width: 150px">Login: <?php echo $_SESSION["login"];?></BR>Total mate(s): <?php echo count($_SESSION["panier"]); ?></div>
		</div>
		</div>
	<div class="baruser1">
		<?php if (empty($_SESSION["login"])) { ?>
		<a class="connecter" href="index.php?page=2">S'inscrire</a>
		<a class="connecter" href="index.php?page=1">Se connecter</a>
		<?php } else {
			if ($_SESSION["is_admin"]) { ?>
				<a class="gestion" href="index.php?page=5">Gestion</a>
			<?php }	?>
		
		<a class="create" href="index.php?page=3">Profil</a>
		<a class="connecter" href="index.php?page=0&deco=1">Se déconnecter</a>
		<?php }	?>
	</div>