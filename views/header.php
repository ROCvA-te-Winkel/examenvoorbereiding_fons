<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/examenvoorbereiding_fons/environment_variables.php';
require_once $_SERVER['DOCUMENT_ROOT'] . $project_path . '/code/database.php';

$db = new Database($db_user, $db_pass);

session_start();

?>

<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
	<title>Fons | Examenvoorbereiding</title>
	<link href="/examenvoorbereiding_fons/styles/main.css" rel="stylesheet" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<header>
	<nav>
		<ul>
			<li><a href="">Inloggen</a></li>
			<li><a href="">Uitloggen</a></li>
		</ul>
	</nav>
</header>

<main>