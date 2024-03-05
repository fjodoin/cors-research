<?php
include_once("config.php");

$id = $_GET['id'];
$stmt = $_PDO->prepare('SELECT * FROM article WHERE id = ?');
$stmt->execute([$id]);
$data = $stmt->fetch();

echo $data['Id'] . ': ' . $data['Description'];
?>
