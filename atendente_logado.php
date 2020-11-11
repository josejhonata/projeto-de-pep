<?php include 'header.php' ?>

<link rel="stylesheet" type="text/css" href="style.css">
<?php
include 'connection.php';

session_start();
if (!isset($_SESSION['matricula'])) {
    header('location: home.php');
    exit();
}

$consulta = $pdo->prepare('SELECT * FROM cliente WHERE id = ?');
$consulta->execute([$_SESSION['id']]);
$cliente = $consulta->fetchALL();


$result_usuarios = "SELECT * FROM cliente";
$resultado_usuarios = $pdo->prepare($result_usuarios);
$resultado_usuarios-> execute();


$result_exames = "SELECT * FROM exame";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();


?>


<h1>Todos os pacientes</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Atendente que cadastro</th>
        <th>Marcar exame</th>
        <th>Acessar cadastro do paciente</th>
        <th>Excluir</th>
       
        
    </tr>
<?php while ($row_usuario = $resultado_usuarios->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
    	<td><?= $row_usuario['nome'] ?></td>
    	<td><?= $row_usuario['atendente_matri'] ?></td>
    	<td><a href="preechendoexame.php?cliente=<?= $row_usuario['id'] ?>">Exames</a></td>
 		<td><a href="dadospaciente.php?cliente=<?= $row_usuario['id'] ?>">Acessar</a></td>
        <td><a href="exclui.php?id=<?= $row_usuario['id']?>">Excluir</a></td>
        
    </tr>


<?php endwhile ?>
</table>
<div class="botao">
<a href="cadastrocliente.php">Cadastrar um novo paciente</a>
</div>

<h2>Todos exames</h2>


<table>
    <tr>
        <th>Id do exame</th>
        <th>Tipo do exame</th>   
    </tr>

<?php while ($row_exames = $resultado_exames->fetch(PDO::FETCH_ASSOC)): ?>
	
    <tr>
    	<td><?= $row_exames['id']?></td>
    	<td><?= $row_exames['nome']?></td>
        
    </tr>


<?php endwhile ?>

</table>

<div class="botao">
<a href="adiciona_exame.php">Adicionar um novo exame</a>
</div>