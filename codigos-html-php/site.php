<?php 

include_once ('conexao');

$nome =  filter_input(INPUT_POST, 'tnome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'tsenha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'tmail', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'tsexo', FILTER_SANITIZE_STRING);
$nasc = filter_input(INPUT_POST, 'tnasc', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'trua', FILTER_SANITIZE_STRING);
$numc = filter_input(INPUT_POST, 'tnum', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'test', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'tcid', FILTER_SANITIZE_STRING);
$urgencia = filter_input(INPUT_POST, 'turg', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 't', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'tqtd', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'ttot', FILTER_SANITIZE_STRING);

$result_usuario =  "INSERT INTO clientes ( id, nome, senha, email, sexo, nasc, rua, numc, estado, cidade, urgencia, mensagem, quantidade, preco) 
VALUES ('' ,'$nome', '$senha', '$email', '$sexo', '$nasc', '$rua', '$numc', '$estado', '$cidade', '$urgencia', '$mensagem', '$quantidade', '$preco')";

$resultado_clientes = mysqli_query($conn, $result_usuario);
 if (mysqli_insert_id($conn)) {
 	header("Location: home.html");
 } else {
 	header("Location: site.html");
 }
 
?>