<?php
include 'header.php' 
include 'connection.php';


$result_usuarios = "SELECT * FROM usuarios";
$resultado_usuarios = mysql_query($pdo, $result_usuarios);

while ($row_usuario = mysql_fetch_assoc($resultado_usuarios)) {
	echo "ID: ". $row_usuario['id'] . "<br>" ;
	echo "NOME: ". $row_usuario['nome'] . "<br>" ;
	echo "Username: ". $row_usuario['username'] . "<br>" ;
	echo "Password: ". $row_usuario['password'] . "<br>" ;
}
<a href="atendente_logado.php">Sair</a>
<a href="logout.php">Sair</a>

?>