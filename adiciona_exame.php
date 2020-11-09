<?php
include 'header.php';
include 'connection.php';

//$sql = 'SELECT * FROM cliente WHERE id = ?'; //$_GET['cliente']





?>

<div class="Formulario">
	<form action="salvarNovo_exame.php" method="POST">
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
				<?php echo "ID do paciente: ". $_GET['id'];?>
				<input type="hidden" name="paciente" value="<?= $_GET['id']?>">
			</div>

			<div class="FormularioInput">
				Resultado do Exame: <br>
				<input type="text" name="resultado">
			</div>
			<div class="FormularioInput">
				
			</div>

			<div class="FormularioInput FormularioInput100 Center">
				<input type="submit" value="OK">
			</div>
		</form>
	</div>