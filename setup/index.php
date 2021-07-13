<?php

require_once '../code/database.php';

$db = new Database('root', 'Mijn Bank van Kennen en Kunnen');

$db->create_default_users();

header('Location: /examenvoorbereiding_fons');