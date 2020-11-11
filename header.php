<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<div class="Nav">
		<?php if (!isset($_SESSION['matricula']) && !isset($_SESSION['id'])): ?>
			<li><a href="caminho_login_cliente.php">Login cliente</a></li>
			<li><a href="caminho_login_atendende.php">Login atendente</a></li>
		<?php else: ?>
			<li><a href="logout.php">Sair</a></li>
			<?php if (isset($_SESSION['matricula'])): ?>
				<li><a href="atendente_logado.php">Todas informações</a></li>
				<li><a href="cadastrocliente.php">Cadastrar Cliente</a></li>
				<li><a href="adicionar_expaciente.php">Adicionar exame para paciente</a></li>
				<li><a href="home.php">Home</a></li>
				<li><a href="adiciona_exame.php">Cadastrar Exames</a></li>
			<?php endif ?>
		<?php endif ?>
		<li><a href="developers.html">Desenvolvedores</a></li>
		
	</div>
	</body>
</html>