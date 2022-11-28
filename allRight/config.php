<?php

try {
	$pdo = new PDO('mysql:dbname=test; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}