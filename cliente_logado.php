<?php include 'header.php' ?>
<?php 
include 'connection.php';
session_start();

//if (!isset($_SESSION['id'])) {
   // header('location: home.php');
   // exit();
//}

?>
<table border="10">
	<tr>
		<td>Exames</td>
		<td>Resultados</td>
	</tr>
</table>
<?= $_SESSION['username']?> - <a href="logout.php">Sair</a>
<?php include 'fechamento.php' ?>