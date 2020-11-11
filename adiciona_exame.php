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
				Tipo do exame: <br>
				<input type="text" name="nome">
			</div>
			<div class="FormularioInput FormularioInput100 Center">
				<input type="submit" value="OK">
			</div>
		</form>
	</div>