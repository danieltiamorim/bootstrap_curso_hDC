<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
	
	
	//Criar a conexao

	
$host = "localhost";
	$dbusername = $login;
	$dbpassword = $senha;
	
	$dbname = 'livraria' ;
	
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);	
		
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }
  }
?>