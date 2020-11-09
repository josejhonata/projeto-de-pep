<?php
include 'connection.php';
session_start();

$matricul = $_SESSION['matricula'];


//$consulta = $pdo->prepare('INSERT INTO exame(nome) VALUES (?)');
//$consulta->execute([$_POST['nome']]);

$consulta= $pdo->prepare('INSERT INTO cli_ex(cliente_id, atendente_matricu ,resultado,nome_exame) VALUES (?,?,?,?)');
$consulta->execute([$_POST['paciente'], $matricul, $_POST['resultado'],$_POST['nome']]);



header('location:dadosexame.php');

?>