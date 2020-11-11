<?php
include 'connection.php';
session_start();

$matricul = $_SESSION['matricula'];



$result_exames = "SELECT * FROM exame";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();


$consulta= $pdo->prepare('INSERT INTO exame(nome) VALUES (?)');
$consulta->execute([$_POST['nome']]);



header('location:atendente_logado.php');

?>