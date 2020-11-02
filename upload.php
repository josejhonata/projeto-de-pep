<?php 
include 'connection.php';


 if(isset($_FILES['arquivo'])){

$extensao = strtolower(substr($_FILES['arquivo']['name'],4 )); 
$novo_nome = md5(time()) .  $extensao;  //define o nome do arquivo
$diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

move_uploaded_file($_FILES['arquivo']['tpm_name'], $diretorio.$novo_nome); //efetua o upload

$sql_code = "INSER INTO exame (nome) VALUES('$novo_nome')";

 }


?>