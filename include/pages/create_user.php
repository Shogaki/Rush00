<?php
if (!empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["conf-password"]) && !empty($_POST["level"]) && !empty($_POST["email"])) {
	include("managers/insert_user.php");
	include("managers/get_one_user.php");

	$user = get_one_user($_POST["login"]);

	if ($_POST["login"] === $user["login"])
		$error = "Cet utilisateur existe déjà";
	else if ($_POST["password"] !== $_POST["conf-password"])
		$error = "Les deux mots de passe saisis sont différents";
	else {
		insert_user($_POST["login"], hash("sha512", $_POST["password"].SEL), $_POST["email"], $_POST["level"], 0, $_POST["categories"]);
	}
}
?>
<div class="baruser2"></div>
<div class="corps">
	<div class="bandegauche">Créer un compte</div>
	<div class="bandehaut"></div>

	<div class="content">
		<center>
			<div class="pos-general">
				<form id="form-create-account" action="#" method="post">
					<div class="pos-id_mdp">
						<input type="text" name="login" required="required" class="connection-input" placeholder="Identifiant" required="required">
						<input type="text" name="email" required="required" class="connection-input" placeholder="Adresse e-mail" required="required">
					</div>
					<div class="pos-pw_cpw">
						<input type="password" name="password" required="required"  class="connection-input" placeholder="Mot de passe" required="required">
						<input type="password" name="conf-password" required="required"     class="connection-input"  required="required" placeholder="Confirmer votre mot de passe">
					</div>
					<div class="pos-lvl">
						<input type="number" min="0" max="21" name="level" required="required" class="connection-input" placeholder="Niveau">
						<select class="select_size connection-input" name="categories[]" style="height:5rem" size="3" multiple>
							<?php

							require("managers/get_all_categories.php");
							$category = get_all_categories();
							foreach ($category as $cat) { ?>
							<option value="<?php echo $cat["id"]?>"><?php echo $cat["nom"]?></option>
							<?php } ?>
						</select>
					</div>
					<div class="pos-button">
						<input class="sub-button" type="submit" value="Créer">
					</div>
					<div>
						<?php if(empty($error) && !empty($_POST)) { ?>
						<p>Compte crée avec succès !</p>
						<?php } else { ?>
						<p><?php echo "$error\n"; ?></p>
						<?php } ?>
					</div>
				</form>
			</div>
		</center>

	</div>
</div>