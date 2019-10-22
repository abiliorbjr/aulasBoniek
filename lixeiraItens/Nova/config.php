<?php
try {
	$pdo = new PDO("mysql:dbname=usuarios;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}