<?php

if (isset($_POST["login"]) && isset($_POST["quantity"]) && isset($_POST["price"]))
	$_SESSION["panier"][] = array("login" => $_POST["login"], "heures" => $_POST["quantity"], prix => $_POST["price"]);


?>


<div class="baruser2"></div>
<div class="corps">
	<div class="bandegauche">Accueil</div>
	<div class="bandehaut">
		<?php
		include("managers/get_all_categories.php");
		$category = get_all_categories();
		?><?php
		foreach ($category as $cat)
		{
		?>
		<form method="get" action="index.php?page=0">
			<input type="hidden" name="cat" value="<?php echo($cat[id])?>">
			<input type="submit" value="<?php echo($cat[nom])?>" class="catlist"></form><?php
		?></br><?php
		}?>
	</ul>
</div>
<div class="content">
	<?php
	include("managers/get_all_users.php");
	include("managers/get_users_from_cat.php");
	if (empty($_GET["cat"])) {
		$users = get_all_users();
	} else {
		$users = get_users_from_cat($_GET["cat"]);
	}

	for ($i = 0; $i < 12 && $i < count($users); $i++) {
		if ($i % 3 == 0) { ?>
	<div class="ctntstudent">
		<?php } ?>
		<div id="produit">
			<div id="hide">
				<form action="" method="post">
					<div id="user-text">
						<p id="user"><?php echo $users[$i]["login"]; ?></p>
						<p id="price"><?php echo $users[$i]["level"] * 42 . "₳"; ?></p>
						<input type="text" style="display:none;" name="login" value="<?php echo $users[$i]["login"]; ?>">
						<input type="number" style="display:none;" name="price" value="<?php echo $users[$i]["level"] * 42; ?>">
					</div>
					<div id="num-pad">
						<center>
							<input class="inum" id="nf<?php echo $users[$i]["login"]; ?>" type="number" name="quantity" value="1" min="1" max="9"/>
						</center>
					</div>
					<center>
						<button type="margin: 10px" class="config shadow" id="Aff" onclick="javascript:location.href='https://profile.intra.42.fr/users/<?php echo $users[$i]["login"]; ?>'">Détails</button>
						<input type="submit" class="config shadow" id="mode" onclick="add_panier(<?php echo $users[$i]["login"]; ?>, <?php echo $users[$i]["level"] * 42 ?>)" />
					</center>
				</form>
			</div>
			<img id="day_of" src="https://cdn.intra.42.fr/users/medium_<?php echo $users[$i]["login"]; ?>.jpg" height="350" width="263"/>
		</div>
		<?php if ($i % 3 == 2) { ?>
	</div>
	<?php } ?>
	<?php
	}
	?>
</div>