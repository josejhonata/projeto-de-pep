<?php
include 'connection.php';
session_start();
$consulta = $pdo->prepare('INSERT INTO cliente (nome, username, password, atendente_matri) VALUES (?, ?, ?, ?)');
$consulta->execute([$_POST['nome'], $_POST['username'], $_POST['password'], $_POST['atendente_matri']]);
header('location:atendente_logado.php');
?>