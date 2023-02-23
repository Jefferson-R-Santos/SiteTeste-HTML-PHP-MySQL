<?php 
 session_start();

if (isset($_POST['submit'])&& !empty($_POST['tnome']) && !empty($_POST['tsenha'])) {
	include_once ('conexao');
	$nome = $_POST['tnome'];
	$senha = $_POST['tsenha'];
    
    $sql = "SELECT * FROM clientes WHERE nome = '$nome' and senha = '$senha'";

    $result = $conn-> query($sql);

    if ( mysqli_num_rows($result) < 1) 
    {
    	unset($_SESSION['tnome']);
    	unset($_SESSION['tsenha']);
    	header('Location: login.html');
    } 
    else {
    	$_SESSION['tnome'] = $nome;
    	$_SESSION['tsenha'] = $senha;
    	header('Location: concluido.html');
    }
    

} else {
	header('Location: login.html');
}


?>