<?php
include 'connection.php';
session_start();
$consulta = $pdo->prepare('INSERT INTO cliente (id, nome, username, password, atendente_matri) VALUES (?, ?, ?, ?, ?)');
$consulta->execute([$_SESSION['id'], $_POST['nome'], $_POST['username'], $_POST['password'], $_POST['atendente_matri']]);
header('location:atendente_logado.php');
?>