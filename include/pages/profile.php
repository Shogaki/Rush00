<?php

if (!empty($_POST["login"])) {
	include("managers/update_one_user.php");
	update_login($_SESSION["login"], $_POST["login"]);
	$_SESSION["login"] = $_POST["login"];
}

?>

	<div class="baruser2"></div>
    <div class="corps">
  
        <div class="bandegauche">Profil</div>
		<div class="bandehaut"></div>
        <div class="content">
        <center><div id="add-category">
            <p class="p">Login : <?php echo $_SESSION["login"] ?></p>
            <form action="#" method="post">
                <input id="input-cat" type="text" name="login" placeholder="Nouveau Login ..." required="required">
                <input type="submit" class="config shadow" value="Valider"  id="mode"/>
            </form>
        </div></center>
        <form action="n">   
            <center><div id="add-category">
                <p class="p">Mot de passe</p>
                <input id="input-cat" type="text" name="firstname" placeholder="Mot de passe Actuel ..." required="required">
            </div></center>
            <center><div id="add-category">
                <input id="input-cat" type="text" name="firstname" placeholder="Nouveau mot de passe ..." required="required">
                <button class="config shadow" id="mode">Valider</button>
            </div></center>
         </form>
        <center><div id="add-category">
            <p class="p">E-mail : </p>
                <form action="n">
                    <input id="input-cat" type="text" name="firstname" placeholder="Modifier l'addresse e-mail ..." required="required">
                    <button class="config shadow" id="mode">Valider</button>
                    </form>
        </div></center>
        <center><div id="add-category">
            <p class="p">Niveau : </p>
                <form action="n">
                    <input id="input-cat" type="number" name="firstname" placeholder="Niveau ..." required="required">
                    <button class="config shadow" id="mode">Valider</button>
                    </form>
        </div></center>
        <center><div id="add-category">
            <p class="p">Supprimer le compte</p>
                <form action="n">
                    <button class="config shadow" id="mode">Valider</button>
                </form>
        </div></center>
        </div>
    
    </div>