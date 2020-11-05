<?php include 'header.php' ?>

<?php 
include 'connection.php';
session_start();

if (!isset($_SESSION['id'])) {
    header('location: home.php');
    exit();
}

$result_usuarios = "SELECT * FROM cliente";
$resultado_usuarios = $pdo->prepare($result_usuarios);
$resultado_usuarios-> execute();



?>

<table>
    <tr>
        <th>Nome</th>
        <th>Usuário</th>
        <th>Senha</th>
        <
    </tr>
<?php while ($row_usuario = $resultado_usuarios->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
    	<td><?= $row_usuario['nome'] ?></td>
    	<td><?= $row_usuario['username'] ?></td>
    	<td><?= $row_usuario['password'] ?></td>
    </tr>


<?php endwhile ?>
</table>





<?= $_SESSION['username']?> - <a href="logout.php">Sair</a>
