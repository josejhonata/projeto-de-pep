<?php include 'header.php' ?>


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
?>
<table border="10">
	<h1>Clientes</h1>
	<tr>
		<td>Nome</td>
		<td>Exame</td>
		<td>Resultado</td>
	</tr>
</table>
    <?php foreach ($cliente as $dado):?>
        <tr> 
            <td><?= $dado['Nome'] ?></td>
            <td><?= $dado['Exame'] ?></td>
            <td><?= $dado['Resultado'] ?></td>
            <td><a href="deleta.php?id=<?= $dado['id'] ?>">x</a></td>
        </tr>
    <?php endforeach ?>
</table>
<div class="Formulario">
	<form action="salvar_cliente.php" method="POST">
		<h1 class="Center">CADASTRO DE CLIENTES</h1>
		<div class="FormularioInput">
			<div class="FormularioInput">
				Nome: <br>
				<input type="text" name="nome">
			</div>
			<div class="FormularioInput">
				Username: <br>
				<input type="text" name="username">
			</div>

			<div class="FormularioInput">
				Password: <br>
				<input type="password" name="password">
			</div>
			<div class="FormularioInput">
				Matrícula do Atendente: <br>
				<input type="text" name="atendente_matri">
			</div>

			<div class="FormularioInput FormularioInput100 Center">
				<input type="submit" value="OK">
			</div>
		</form>
	</div>
</div>
<?= $_SESSION['username']?> - <a href="logout.php">Sair</a>
<?php include 'fechamento.php' ?>