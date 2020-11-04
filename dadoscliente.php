<?php
include 'header.php' 
include 'connection.php';


$result_usuarios = "SELECT * FROM cliente";
$resultado_usuarios = $pdo->prepare($result_usuarios);
$resultado_usuarios-> execute();

while ($row_usuario = $resultado_usuarios->fetch(PDO: :FETCH_ASSOC)) {
	
	echo "ID: ". $row_usuario['id'] . "<br>" ;
	echo "NOME: ". $row_usuario['nome'] . "<br>" ;
	echo "Username: ". $row_usuario['username'] . "<br>" ;
	echo "Password: ". $row_usuario['password'] . "<br>" ;

}

?>
<a href="atendente_logado.php">Sair</a>
<a href="logout.php">Sair</a>
