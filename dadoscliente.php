<?php

include 'header.php' ;
include 'connection.php';



$result_usuarios = "SELECT * FROM cliente";
$resultado_usuarios = $pdo->prepare($result_usuarios);
$resultado_usuarios-> execute();

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Ações</th>
        <th>Exclui</th>
        
    </tr>
<?php while ($row_usuario = $resultado_usuarios->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
    	<td><?= $row_usuario['nome'] ?></td>
    	<td><?= $row_usuario['username'] ?></td>
    	<td><?= $row_usuario['password'] ?></td>
        <td><a href="exames.php?cliente=<?= $row_usuario['id'] ?>">Exames</a></td>
        <td><a href="exclui.php?id=<?= $row_usuario['id']?>">Exclui</a></td>
    </tr>


<?php endwhile ?>
</table>
