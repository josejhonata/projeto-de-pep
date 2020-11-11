<?php

include 'header.php' ;
include 'connection.php';



$matricul = $_SESSION['matricula'];

?>

<div class="Formulario">
    <form action="salvar_cliente.php" method="POST">
        <h1 class="Center">CADASTRO DE PACIENTE</h1>
        <div class="FormularioInput">
            <div class="FormularioInput">
                Nome: <br>
                <input type="text" name="nome">
            </div>
            <div class="FormularioInput">
                Username: <br>
                <input type="text" name="username">
            </div>

            <div class="FormularioInput">
                Password: <br>
                <input type="password" name="password">
            </div>
            <div class="FormularioInput">
                <?php echo "Matrícula do Atendente: ". $matricul;?>
            </div>

            <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="OK">
            </div>
        </form>
    </div>
</div>