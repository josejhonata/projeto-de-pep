<?php  
include 'header.php' ;
include 'connection.php';

$result_exames = "SELECT * FROM exame";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();

$matricul = $_SESSION['matricula'];


?>



<h1>Cadastro de Exame</h1>

<div class="Formulario">
	<form action="salvar_exame.php" method="GET">
		
		<div class="FormularioInput">
			<div class="FormularioInput">
				<?php echo "Matrícula do Atendente: ". $matricul;?>
			</div>
			

			<div class="FormularioInput">
				<?php echo "ID do paciente: ". $_GET['cliente'];?>
				<input type="hidden" name="paciente" value="<?=$_GET['cliente']?>">
			</div>


			<div class="FormularioInput">
				<select name="tipo_enviar">
					<option value="1">sangue</option>
					<option value="2">raio x</option>
					<option value="3">eletrocardiograma</option>
				</select>
				<input type="submit" name="tipo">
			</div>

	</div>
</div>


</form>
