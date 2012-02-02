<?php
require_once('class/Winkelmand.php');

$soort = $_GET["item"];

$winkelmand = new Winkelmand();
$aantal = toevoegen($soort);


?>
