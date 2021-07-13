<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/examenvoorbereiding_fons/views/header.php';

if ($_SESSION['login']['admin']) {
	?>

	<table>
		<tr>
			<th>Rol</th>
			<th>Gebruikernaam</th>
			<th>Aangemaakt op</th>
		</tr>
	</table>

<?php } ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/examenvoorbereiding_fons/views/footer.php' ?>
