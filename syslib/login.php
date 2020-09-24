<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") 

  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = 'livraria';

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  
 $entrar = $_POST['entrar'];
  $login = $_POST['login'];
  $senha=  MD5($_POST['senha']);
                         
 
     if (isset($entrar)) {

      $verifica = ("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");

        if (($verifica)<=0) {
          echo"<script language='javascript' type='text/javascript'>
          alert('Login e/ou senha incorretos');window.location
          .href='login.html';</script>";
          die();
        }else {
          setcookie("login",$login);
          header("Location:home.php");
        }
        }
      
    
  
  ?>