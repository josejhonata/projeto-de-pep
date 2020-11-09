<?php 
include 'header.php' ;
include 'connection.php';

$id= $_GET['id'];

$sql= "delete from cliente where id = $id";
$resultado_exclui = $pdo->prepare($sql);
$resultado_exclui-> execute();

header('location:dadoscliente.php');
 ?>



