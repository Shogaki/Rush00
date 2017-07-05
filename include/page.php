<div id="page">
	<?php
	if (!empty($_GET["page"])){
		$page=$_GET["page"];}
	else
	{
		$page=0;
	}
	switch ($page) {
		case 0:
			include_once('include/pages/liste_user.php');
			break;
		case 1:
			include_once('include/pages/connexion.php');
			break;
		case 2;
			include_once('include/pages/create_user.php');
			break;
		case 3;
			include_once('include/pages/profile.php');
			break;
		case 4;
			include_once('include/pages/panier.php');
			break;
		case 5;
			include_once('include/pages/edit-category.php');
			break;
	} ?>
</div>
