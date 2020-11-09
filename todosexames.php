<?php
include 'header.php';
include 'connection.php';




$result_exames = "SELECT * FROM cli_ex";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();
?>



<table>
    <tr>
        <th>Cliente id</th>
        <th>Resultado do exame</th>
        <th>Tipo de exame</th>
        <th>Matricula do atendente</th>
      
    </tr>
<?php while ($row_exames = $resultado_exames->fetch(PDO::FETCH_ASSOC)): ?>
	
    <tr>
    	<td><?= $row_exames['cliente_id'] ?></td>
    	<td><?= $row_exames['resultado'] ?></td>
    	<td><?= $row_exames['nome_exame'] ?></td>
    	<td><?= $row_exames['atendente_matricu'] ?></td>
    </tr>


<?php endwhile ?>
</table>