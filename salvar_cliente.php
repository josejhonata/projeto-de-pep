<?php
include 'connection.php';
session_start();
$matricul = $_SESSION['matricula'];

$consulta = $pdo->prepare('INSERT INTO cliente (nome, username, password, atendente_matri) VALUES (?, ?, ?, ?)');
$consulta->execute([$_POST['nome'], $_POST['username'], $_POST['password'],$matricul]);
header('location: dadoscliente.php');
?>