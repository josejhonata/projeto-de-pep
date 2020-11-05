<?php 
session_start();
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$consulta = $pdo->prepare("
	SELECT * FROM cliente
	WHERE username = ? AND password = ?
");
$consulta->execute([$username, $password]);
$line = $consulta->fetchALL();

if(sizeof($line) == 0){
	header('location:home.php');
	exit();
}
$_SESSION['username'] = $line[0]['username'];
$_SESSION['id'] = $line[0]['id'];
header('location:cliente_logado.php');
?>