<?php include 'header.php'; ?>
<div class="Formulario">
	<form action="controle_cadastro.php" method="POST">
		<h1 class="Center">CADASTRO DE CLIENTES</h1>
		<div class="FormularioInput">
			<div class="FormularioInput">
				Nome: <br>
				<input type="text" name="username">
			</div>

			<div class="FormularioInput">
				Password: <br>
				<input type="password" name="password">
			</div>

			<div class="FormularioInput FormularioInput100 Center">
				<input type="submit" value="OK">
			</div>
		</form>
	</div>
</div>
<?php include 'fechamento.php'; ?>