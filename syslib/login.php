<?php



   $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = 'livraria';

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  

 
 $entrar = ($_POST['entrar']);
  $login = ($_POST['login']);
  $senha=  MD5 ($_POST['senha']);
                         
 if (empty($login) or empty ($senha)):
   Echo  "<li> O campo Login / senha precisa ser preenchido</li>";
 else:
    $sql = "SELECT login FROM usuarios WHERE login = '$login'";
    $resultado = mysqli_query ($conn, $sql);
    if(mysqli_num_rows($resultado) >0):
      
     $verifica = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
     $resultado = mysqli_query ($conn, $verifica );
     
        if (mysqli_num_rows($resultado) == 1):
          setcookie("login",$login);
          header("Location:home.php");
        else:
       
          echo"<script language='javascript' type='text/javascript'>
          alert('Login e/ou senha incorretos');window.location
          .href='login.html';</script>";
          
        endif;

    else: 
        echo "<li> Usuário e Senha não conferem </li>";
         echo"<script language='javascript' type='text/javascript'>
          alert('Login e/ou senha incorretos');window.location
          .href='login.html';</script>";
      
    endif;
  endif;
       var_dump  ('$login' and '$senha')
  ?>