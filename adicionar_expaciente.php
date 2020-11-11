<?php 

include 'header.php' ;
include 'connection.php';

$result_exames = "SELECT * FROM exame";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();

$matricul = $_SESSION['matricula'];

?>

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


<h2>Cadastro de Exame</h2>

<div class="Formulario">
	<form action="salvar_exame.php" method="POST">
		
		<div class="FormularioInput">
			<div class="FormularioInput">
				<?php echo "Matrícula do Atendente: ". $matricul;?>
			</div>
			<div class="FormularioInput">
				Id do exame: <br>
				<input type="text" name="tipo">
			</div>

			<div class="FormularioInput">
				ID do paciente: <br>
				<input type="number" name="paciente">
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

