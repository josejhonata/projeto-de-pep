<?php include 'header.php' ?>

<?php 
include 'connection.php';
session_start();

if (!isset($_SESSION['id'])) {
    header('location: home.php');
    exit();
}

$usuario= $_SESSION['username'];

$result_usuarios = "SELECT * FROM cliente";
$resultado_usuarios = $pdo->prepare($result_usuarios);
$resultado_usuarios-> execute();


$result_exames = "SELECT * FROM cli_ex";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();


?>


<h1>Dados do paciente</h1>
<table>
    <tr>
        <th>Nome</th>
        <th>Atendente que fez o cadastro</th>
        
    </tr>
<?php while ($row_usuario = $resultado_usuarios->fetch(PDO::FETCH_ASSOC)): ?>
    <?php if ($usuario== $row_usuario['username']): ?>
        <?php $id_paciente = $row_usuario['id']?>
    <tr>
    	<td><b><?= $row_usuario['nome'] ?></b></td>
    	<td><b><?= $row_usuario['atendente_matri']?></b></td>
    </tr>

<?php endif?>
<?php endwhile ?>
</table>


<h1>Os exames do Paciente</h1>
<table>
    <tr>
        <th>Cliente id</th>
        <th>Matricula do atendente</th>
        <th>resultado do exame</th>
        <th>nome do exame</th>
    </tr>

<?php while ($row_exames = $resultado_exames->fetch(PDO::FETCH_ASSOC)): ?>
<?php if ($id_paciente==$row_exames['cliente_id']): ?>
    <tr>
        <td><b><?= $row_exames['cliente_id'] ?></b></td>
        <td><b><?= $row_exames['resultado'] ?></b></td>
        <td><b><?= $row_exames['nome_exame'] ?></b></td>
        <td><b><?= $row_exames['atendente_matricu'] ?></b></td>
    </tr>


<?php endif?>
<?php endwhile ?>
</table>



