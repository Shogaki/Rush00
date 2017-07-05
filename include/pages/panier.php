<div class="corps">
<?php


if (!empty($_POST)) {
	unset($_SESSION["panier"][$_POST["index"]]);
}

?>



<?php if (empty($_SESSION["panier"])) { ?>
<h2 id="titre-panier">Aucun élément dans le panier</h2>
<?php } else { ?>
<h2 id="titre-panier">Panier</h2>
	<table id="panier-list">
		<tr>
			<th>Login</th>
			<th>Heures</th>
			<th>Prix</th>
			<th></th>
		</tr>
		<?php foreach($_SESSION["panier"] as $key => $elem) {
		$prix += $elem["prix"];
		?>
		<tr>
			<td><?php echo $elem["login"] ?></td>
			<td><?php echo $elem["heures"] ?></td>
			<td><?php echo $elem["prix"] ?></td>
			<td>
				<form action="index.php?page=4" method="post">
					<input type="submit" value="supprimer">
					<input type="text" style="display:none;" name="index" value="<?php echo $key ?>">
				</form>
			</td>
		</tr>
		<?php } ?>
		<tr id="last-panier">
			<td colspan="3">Total</td>
			<td><?php echo $prix ?></td>
		</tr>
	</table>
	<?php if (empty($_SESSION["login"])) { ?>
	<p style="text-align:center;">Vous devez être connecté pour valider votre panier</p>
	<?php } else { ?>
	<form id="submit-panier" action="">
		<input type="submit" name="valider-commande" value="Valider la commande" id="">
	</form>


<?php
	}
}
?>
</div>