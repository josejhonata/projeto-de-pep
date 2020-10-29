<?php
include 'connection.php';
session_start();
$consultando = $pdo->prepare('INSERT INTO cliente_ex (id, nome_exame, cliente_id) VALUES (?, ?, ?)');
$consultando->execute([$_POST['nome_exame'], $_POST['cliente_id'], $_SESSION['id']]);
header('location:cliente_logado.php');
?>