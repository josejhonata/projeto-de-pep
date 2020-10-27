<?php 
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$consulta = $pdo->prepare("
	SELECT * FROM atendente
	WHERE username = ? AND password = ?
");
$consulta->execute([$username, $password]);
$line = $consulta->fetchALL();

if(sizeof($line) == 0){
	header('location:home.php');
	exit();
}
$_SESSION['username'] = $line[0]['username'];
$_SESSION['matricula'] = $line[0]['matricula'];
header('location:atendente_logado.php');
?>