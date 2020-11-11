<?php
include 'connection.php';
session_start();

$matricul = $_SESSION['matricula'];


//$consulta = $pdo->prepare('INSERT INTO exame(nome) VALUES (?)');
//$consulta->execute([$_POST['nome']]);

$consulta= $pdo->prepare('INSERT INTO cli_ex(cliente_id, atendente_matricu ,id_exame) VALUES (?,?,?)');
$consulta->execute([$_GET['paciente'], $matricul ,$_GET['tipo_enviar']]);



header('location:atendente_logado.php');

?>