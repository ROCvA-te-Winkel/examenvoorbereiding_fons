<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/examenvoorbereiding_fons/views/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	(new Database('root', 'Mijn Bank van Kennen en Kunnen'))->login($_POST['username'], $_POST['password']);
}

?>

<form method="post">
	<input type="text" name="username" placeholder="Gebruikersnaam" required autofocus/>
	<input type="password" name="password" placeholder="Wachtwoord" required minlength="8"/>

	<input type="submit" value="Inloggen"/>
</form>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/examenvoorbereiding_fons/views/footer.php' ?>
