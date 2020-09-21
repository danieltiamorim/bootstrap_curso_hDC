<?php
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login , senha = '$login' AND '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        setcookie("senha",$senha);
        header("Location:syslib_cadastro.php");


      }
  }
?>