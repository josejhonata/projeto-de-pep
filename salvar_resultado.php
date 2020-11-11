<?php 

include 'header.php' ;
include 'connection.php';

$resultado=$_POST['resultado'];
$id=$_POST['oid'];
$cliente=$_POST['cliente'];


$result_exames = "UPDATE cli_ex set resultado= '$resultado' where id= $id";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();

header('location:atendente_logado.php');
 ?>


