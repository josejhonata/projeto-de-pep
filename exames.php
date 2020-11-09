<?php
include 'header.php';
include 'connection.php';

//$sql = 'SELECT * FROM cliente WHERE id = ?'; //$_GET['cliente']


$result_exames = "SELECT * FROM cli_ex";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();
?>



<table>
    <tr>
        <th>Cliente id</th>
        <th>Matricula do atendente</th>
        <th>resultado do exame</th>
        <th>nome do exame</th>
        
    </tr>
<?php while ($row_exames = $resultado_exames->fetch(PDO::FETCH_ASSOC)): ?>
	<?php if ($_GET['cliente']==$row_exames['cliente_id']): ?>
        <?php $id_exame = $row_exames['id']?>
    <tr>
    	<td><?= $row_exames['cliente_id']?></td>
    	<td><?= $row_exames['resultado']?></td>
    	<td><?= $row_exames['nome_exame']?></td>
    	<td><?= $row_exames['atendente_matricu']?></td>
        
    </tr>

<?php endif?>
<?php endwhile ?>
</table>

