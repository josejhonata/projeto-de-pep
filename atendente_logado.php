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

$matricul = $_SESSION['matricula'];
?>

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
				<?php echo "Matrícula do Atendente: ". $matricul;?>
			</div>

			<div class="FormularioInput FormularioInput100 Center">
				<input type="submit" value="OK">
			</div>
		</form>
	</div>
</div>

<div class="Formulario">
	<form action="salvar_exame.php" method="POST">
		<h1 class="Center">CADASTRO DE EXAMES</h1>

		<div class="FormularioInput">
			<div class="FormularioInput">
				<?php echo "Matrícula do Atendente: ". $matricul;?>
			</div>
			<div class="FormularioInput">
				Nome do exame: <br>
				<input type="text" name="nome">
			</div>

			<div class="FormularioInput">
				ID do paciente: <br>
				<input type="number" name="paciente">
			</div>

			<div class="FormularioInput">
				Tipo do exame: <br>
				<input type="number" name="tipoExame">
			</div>
			<div class="FormularioInput">
				
			</div>

			<div class="FormularioInput FormularioInput100 Center">
				<input type="submit" value="OK">
			</div>
		</form>
	</div>
</div>


</form>
<?= $_SESSION['username']?> - <a href="logout.php">Sair</a>
<?php include 'fechamento.php' ?>