<?php
session_start();
require_once("include/config.php");
require_once("include/header.php");
?>
<div id="corps">
<?php
require_once("include/menu.php");
	
	// Dans toutes les pages, les liens doivent etre du type : href="/index.php?page=1"
	// On peut aussi faire des sortes de define comme en C, pour pouvoir modifier ca plus facilement
	// Du genre <a href="index.php?page=<?php echo DECONNEXION ?\>">
	// Ca evite de devoir repasser dans toutes les pages si on change quelque chose a la derniere minute
	// Et pour faire des define, c'est simplement : define('ACCUEIL', 0); dans un fichier .php
	
require_once("include/page.php");
?>
</div>
<?php
require_once("include/footer.php");
?>
