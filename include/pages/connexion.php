<?php

if (!empty($_POST["login"]) && !empty($_POST["password"])) {
	include("managers/get_one_user.php");

	$user = get_one_user($_POST["login"]);
	$hashed_pwd = hash("sha512", $_POST["password"].SEL);
	if ($_POST["login"] === $user["login"] && $hashed_pwd === $user["password"]) {
		$_SESSION["login"] = $_POST["login"];
		$_SESSION["is_admin"] = $user["rang"];
	} else {
		$error = "Mauvais login / mot de passe";
	}
}

?>
<div class="baruser2"></div>
<div class="corps">
	<div class="bandegauche">Connexion client</div>
	<div class="bandehaut"></div>        
	<div class="content">
		<center>
			<div class="pos-login">
				<form action="#" method="post">
					<div class="pos-connection"> 
						<input type="text" name="login" required="required" class="connection-input" placeholder="Identifiant">
						<input type="password" name="password" required="required" class="connection-input" placeholder="Mot de passe">
					</div>
					<div class="button-pos">
						<input class="sub-button" type="submit" value="Connexion">
					</div>
					<?php if (!empty($error)) {
						echo '<p>'.$error.'</p>'."\n";
					} else if (!empty($_POST)){ ?>
					<p>Vous êtes connecté</p>
					<?php } ?>
				</form>
			</div>
			<a href="index.php?page=2">
				<input class="create-account" type="submit" value="Créer un compte"></a>       
		</center>
	</div>
</div>