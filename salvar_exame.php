<?php
include 'connection.php';
session_start();

$matricul = $_SESSION['matricula'];


$consulta = $pdo->prepare('INSERT INTO exame(nome) VALUES (?)');
$consulta->execute([$_POST['nome']]);

$Sconsulta= $pdo->prepare('INSERT INTO cli_ex(cliente_id,atendente_matricu) VALUES (?,?)');
$Sconsulta->execute([$_POST['paciente'], $matricul]);

$Tconsulta = $pdo->prepare('INSERT INTO tipo_ex(id) VALUES (?)');
$Tconsulta->execute([$_POST['tipoExame']]);


header('location:dadosexame.php');

?>