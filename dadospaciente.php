<?php

include 'header.php' ;
include 'connection.php';



$result_usuarios = "SELECT * FROM cliente";
$resultado_usuarios = $pdo->prepare($result_usuarios);
$resultado_usuarios-> execute();

$result_exames = "SELECT * FROM cli_ex";
$resultado_exames = $pdo->prepare($result_exames);
$resultado_exames-> execute();



?>



<h1>Dados do cliente</h1>

<table>
    <tr>
        <th>Id do paciente</th>
        <th>Nome</th>
        <th>Usuário</th>
        <th>Senha</th>
        <th>Exclui</th>
        
    </tr>
<?php while ($row_usuario = $resultado_usuarios->fetch(PDO::FETCH_ASSOC)): ?>
  <?php  if ( $_GET[ 'cliente' ] == $row_usuario[ 'id' ]): ?>
    <tr>
        <td><?= $row_usuario['id'] ?></td>
    	<td><?= $row_usuario['nome'] ?></td>
    	<td><?= $row_usuario['username'] ?></td>
    	<td><?= $row_usuario['password'] ?></td>
        <td><a href="exclui.php?id=<?= $row_usuario['id']?>">Excluir</a></td>

    </tr>

<?php  endif ?>
<?php endwhile ?>
</table>


<h2>Exames</h2>


<table>
    <tr>
        <th>Codigo de indentificação do exame</th>
        <th>Matricula atendente</th>
        <th>Id do exame</th>
        <th>Data do cadastro</th>
        <th>Resultado</th>
        <th>Adicionar resultado</th>
        
    </tr>

    <?php while ($row_exames = $resultado_exames->fetch(PDO::FETCH_ASSOC)): ?>
         <?php  if ( $_GET[ 'cliente' ] == $row_exames[ 'cliente_id' ]): ?>
  <tr>
        <td><?= $row_exames['id'] ?></td>
        <td><?= $row_exames['atendente_matricu'] ?></td>
        <td><?= $row_exames['id_exame']?></td>
        <td><?= $row_exames['data']?></td>
        <td><?= $row_exames['resultado'] ?></td>
        <td><a href="adicionar_resultado.php?id=<?=$row_exames['id']?>">Adicionar resultado</a></td>
  </tr>
  <?php  endif ?>
    <?php endwhile ?>

</table>



