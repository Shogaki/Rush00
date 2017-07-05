<?php
if (!empty($_POST["new-cat"])) {
	include("managers/insert_category.php");
	insert_category($_POST["new-cat"]);
} else if (!empty($_POST["rename-cat-1"])) {
	include("managers/update_one_category.php");
	update_one_category($_POST["rename-cat-1"], $_POST["rename-cat-2"]);
} else if (!empty($_POST["del-cat"])) {
	include("managers/remove_one_category.php");
	remove_one_category($_POST["del-cat"]);
} else if (!empty($_POST["modif"])) {
	if (!empty($_POST["modif-set-user"])) {
		include("managers/update_one_user.php");
		update_droits($_POST["modif"], 0);
	} else if (!empty($_POST["modif-set-admin"])) {
		include("managers/update_one_user.php");
		update_droits($_POST["modif"], 1);
	} else if (!empty($_POST["modif-remove"])) {
		include("managers/remove_one_user.php");
		remove_one_user($_POST["modif"]);
	}
}
?>
<div class="baruser2"></div>
<div class="corps">
	<div class="bandegauche">Gestion</div>
	<div class="bandehaut"></div>
	<div class="content">
		<div class="add-category">
			<center>
				<form action="index.php?page=5" method="post">
					<br>
					<input id="input-cat" type="text" name="new-cat" placeholder="Nouvelle Catégorie ..." required="required">
					<br>
					<button class="config shadow" id="mode">Valider</button>
				</form>
			</center>
		</div>
		<br>
		<div class="edit-category">
			<center>
				<form action="index.php?page=5" method="post">
					<br>
					<input id="input-cat" type="text" name="rename-cat-1" placeholder="Nom de Catégorie actuelle ..." required="required">
					<br>
					<br>
					<input id="input-cat" type="text" name="rename-cat-2" placeholder="Nouveau nom de Catégorie ..." required="required">
					<br><br>
					<button class="config shadow" id="mode">Valider</button>
				</form>
			</center>
		</div>
		<br>
		<div class="add-category">
			<center>
				<form action="index.php?page=5" method="post">
					<br>
					<input id="input-cat" type="text" name="del-cat" placeholder="Supprimer une  Catégorie ..." required="required">
					<br>
					<button class="config shadow" id="mode">Valider</button>
				</form>
			</center>
		</div>
		<br>
		<div class="add-category">
			<center>
				<form action="index.php?page=5" method="post">
					<br>
					<input id="input-cat" type="text" name="modif" placeholder="Modifier un Compte ... (Saisir le Login)" required="required">
					<br>
					<input class="config shadow" type="submit" name="modif-set-user" value="Utilisateur">
					<input class="config shadow" type="submit" name="modif-set-admin" value="Admin">
					<input class="config shadow" type="submit" name="modif-remove" value="Supprimer">
				</form>
			</center>
			<center>
				<a href="index.php?page=2" class="config shadow">Créer un utilisateur</a>
			</center>
		</div>
	</div>
</div>