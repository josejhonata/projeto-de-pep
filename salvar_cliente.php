<?php
include 'connection.php';
session_start();
$matricul = $_SESSION['matricula'];

$consulta = $pdo->prepare('INSERT INTO cliente (nome, username, password, atendente_matri) VALUES (?, ?, ?, $matricul)');
$consulta->execute([$_POST['nome'], $_POST['username'], $_POST['password'], $_POST['atendente_matri']]);
header('location:atendente_logado.php');
?>