<?php
include 'connection.php';
session_start();

$matricul = $_SESSION['matricula'];



$result_exames = "SELECT * FROM cli_ex";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();


$consulta= $pdo->prepare('INSERT INTO cli_ex(cliente_id, atendente_matricu ,resultado,nome_exame) VALUES (?,?,?,?)');
$consulta->execute([$_POST['paciente'], $matricul, $_POST['resultado'],$_POST['nome']]);



header('location:todosexames.php');

?>