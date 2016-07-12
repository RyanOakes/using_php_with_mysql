<?php

try {
		$db = new PDO("mysql:host=localhost;dbname=shirts4mike;port=8889", "root", "root");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
} catch (Exception $e) {
	echo "Couldn't connect to the database.";
	exit;
}

try {
		$results = $db->query("SELECT name, price, img FROM products ORDER BY sku ASC");
} catch (Exception $e) {
		echo "Data could not be received.";
		exit;
}

$products = $results->fetchAll(PDO::FETCH_ASSOC);
