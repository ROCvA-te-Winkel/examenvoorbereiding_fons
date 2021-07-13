<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/examenvoorbereiding_fons/views/header.php';

session_start();

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

?>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/examenvoorbereiding_fons/views/footer.php' ?>
