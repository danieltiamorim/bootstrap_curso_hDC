<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SysLib: Home</title>

    <!----- Fonte ----->  
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Sans+JP&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

    <!----- Bootstrap ----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/styles.css">
    
    <!----- Scripts ----->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
    crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     
    <!----- Font Awesome ----->
    <script src="https://kit.fontawesome.com/242457c615.js" crossorigin="anonymous"></script>

     <!----- Progress Bar ----->
    <script> src="js/progressbar.min.js"</script>
    
    <!----- Parallax ----->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>

<body>
<header> 
    
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <a class="navbar-brand" href="home.php"> 
                <img id="logo" src="logo.png"> SysLib: Home
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbar-links"
                aria-controls="navbar-links" aria-expanded="false" 
                aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" id="home-menu" href="home.php#"></span>Home</a>
                    <a class="nav-item nav-link" id="estoque-menu" href="estoque.html#">Estoque</a>
                    <a class="nav-item nav-link" id="pesquisa-menu" href="cadastro_cliente.html#">Cliente</a>
                    <a class="nav-item nav-link" id="pesquisa-menu" href="pedidos.html#">Pedido</a>
                    <a class="nav-item nav-link" id="pesquisa-menu" href="cadastro_usuario.html#">Cadastro de Usuário</a>
                    <a class="nav-item nav-link" id="pesquisa-menu" href="login.html#"><font color='red'>Logout</font></a>
                </div>
            </div> 
        </nav>
        
        </div>
        </header>
        

        <br> <br> 



<main>
        <div class="container-fluid">
          <div id="cadastro">
            <div class="container"> 
              <div class="row">
                <div class="col-12">               
                 <br> <h4 class="main-title"><u>Pesquisa Estoque</u></h4> 
                <form method="POST" action="pesquisar.php">
                <input type="text" name="pesquisar" placeholder="ISBN, Autor, Editora ou Título" size="50">
                  <input type="submit" value="Buscar">
                </form>
                
<br>
              </div>
               </div>

               <div class="container"> 
               <div class="row"> 
               <div class="col-4"> 
<?php
  $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
      
                        
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
// Charset UTF-8
header('Content-Type: text/html; charset=utf-8');


                             
    }

?>
<br>
<div class="container"> 
<button> <a href='estoque.html'>Incluir Novo <font color='red'>Livro</font></a></button> <br>
<br>
<button> <a href='cadastro_usuario.html'>Incluir Novo <font color='red'>Usuário</font></a></button> <br>

<br>
<button> <a href='cadastro_cliente.html'>Incluir Novo <font color='red'>Cliente</font></a></button> <br>
           
</div>
            </div>
            </div>
            </div>
</div>
        </div>

</div>
  </div>
</div>

  </main>

<div id="copy-area">
	<div class="container">
		<div class="row align-self-end">
			<div class="col-md-12">
			  <p>Desenvolvido por <a href="https://www.n-s-tecnologia.webnode.com" target="_blank">N&S - Tecnologia</a> © 2020</p>
			</div>
		</div>
	</div>	 
</div>	 


</body>

</html>