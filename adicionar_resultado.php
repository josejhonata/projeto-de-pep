<?php 

include 'header.php' ;
include 'connection.php';

$result_usuarios = "SELECT * FROM cli_ex";
$resultado_usuarios = $pdo->prepare($result_usuarios);
$resultado_usuarios-> execute();

while ($row_usuario = $resultado_usuarios->fetch(PDO::FETCH_ASSOC)){

    $cliente= $row_usuario['cliente_id'];
}   
     
?>


<div class="Formulario">
    <form action="salvar_resultado.php" method="POST">
    	<div class="FormularioInput">
    		Resultado: 
    		<input type="text" name="resultado">
    	</div>
    		<div class="FormularioInput"> 
    		<input type="hidden" name="oid" value="<?= $_GET['id']?>">
    	</div>
            <div class="FormularioInput"> 
            <input type="hidden" name="cliente" value="<?=$cliente?>">
        </div>
    	 <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="OK">
            </div>
    	</form>
    </div>

