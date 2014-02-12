<?php
date_default_timezone_set('Europe/Warsaw');
$player = $_POST["player"];
$room = $_POST["room"];
$date = date('Y-m-d G:i:s');
	$pdo = new PDO("mysql:host=localhost;dbname=horrorstory", "pudel","Kupa1234!");

	$pdo->exec("INSERT INTO player (selected, player, date, room) VALUES (1, '$player', '$date', $room)");

?>
