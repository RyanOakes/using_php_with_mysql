<?php

try {
		$db = new PDO("mysql:host=localhost;dbname=shirts4mike;port=8889", "root", "root");
		var_dump($db);
} catch (Exception $e) {
	echo "Couldn't connect to the database.";
	exit;
}

echo "Connection successful!";
