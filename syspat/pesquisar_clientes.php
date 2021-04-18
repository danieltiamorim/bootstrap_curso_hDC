<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SysLib: Pesquisa</title>

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
				<a class="navbar-brand" href="index.html"> 
					<img id="logo" src="logo.png"> SysLib
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbar-links"
					aria-controls="navbar-links" aria-expanded="false" 
					aria-label="toggle navigation">
					<span class="navbar-toggler-icon"></span> 
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
					<div class="navbar-nav">
						<a class="nav-item nav-link" id="home-menu" href="#"></span> Home</a>
						<a class="nav-item nav-link" id="estoque-menu" href="estoque.html#">Estoque</a>
						<a class="nav-item nav-link" id="pesquisa-menu" href="pesquisar.html#">Pesquisa</a>
						<a class="nav-item nav-link" id="pesquisa-menu" href="pedidos.html#">Pedido</a>
					</div>
				</div> 
				
			</nav>
			
			</div>
	</header>

<main>
  <br> <br>
   
    <div class="container-fluid">
          <div id="cadastro">
            <div class="container"> 
              <div class="row">
                <div class="col-12">  
                
                
                <h4 class="main-title"><u>Pesquisa</u></h4> 

 
                <form method="POST" action="pesquisar_clientes.php">
                Pesquisar:<input type="text" name="pesquisar" placeholder="Nome Cliente, CPF, E-mail, Endereço, " size="50">
                  <input type="submit" value="BUSCAR">
                </form>
              </div>
            </div>
          </div>
        </div>
            

		
           
			<div id="cadastro">
				<div class="row">
					<div class="col-12">  
                    <div class="container">     
						<h4 class="main-title"><u>Resultados</u></h4> 
                    

                          <?php
                            //pesquisar.php
                            
                            // Inclui os detalhes da conexão
                            require 'conexao.php';
                            
                            // Tenta conectar e executar a configuração
                             
                                // Cria o objeto da conexão PDO
                                
                                

                                //Criar a conexao
                                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                                
                                $pesquisar = $_POST['pesquisar'];
                                
                                    // tentativa de paginação
                            
                                  
                                   
                                     
                                
$result_livros = "SELECT * FROM clientes WHERE nome_cliente LIKE '%$pesquisar%' or
cpf LIKE '%$pesquisar%' or
logradouro LIKE '%$pesquisar%' or  
cep LIKE '%$pesquisar%'   or  
email LIKE '%$pesquisar%'  or  
uf LIKE '%$pesquisar%'  or  
bairro LIKE '%$pesquisar%' ";

  $limit = 15;

  $ini   = $page * $limit;       
  limit  $ini, $limit


$resultado= mysqli_query($conn, $result_livros);

while($exibe = mysqli_fetch_assoc($resultado)){
    echo   "<table>",
                                    
    "</p>  <b>Nome do livro:</b> ".$exibe ['titulo']."<br>",
        "  <b> Autor: </b> ".$exibe ['autor']."<br>",
        "  <b> Preço de Venda: </b> ".$exibe ['preco_venda']."<br>",
        "  <b> Editora: </b> ".$exibe ['editora']."<br>",
        "  <b> Peso: </b> ".$exibe ['peso']."<br>",
        "  <b> Estado: </b> ".$exibe ['estado']."<br>",
        "  <b> Estante: </b> ".$exibe ['estante']."<br>",
        "  <b> Idioma: </b> ".$exibe ['idioma']."<br>",
        "  <b> ISBN: </b> ".$exibe ['isbn']."</p><br>",                                                                     
                                  
            "</table>";

          }
         


          $sql2 = "SELECT count(*) as count FROM livros ";
          $resultado2 = mysqli_query($conn, $sql2); 
          $row  = mysqli_fetch_assoc($resultado2);
          $total_registros = $row['count'];
          $num_paginas     = ceil($total_registros / $limit);
     


                          ?>



<div>
    <ul class="pagination pagination-sm pull-right">
    <button> <li><a href="pesquisar.php?page=<?php echo $num_paginas -1?>" id="page"><< Anterior</a></li>/<button>
        <?php
            for($i = 1; $i <= $num_paginas; $i++){ ?>
                <li><a href="pesquisar.php?page=<?php echo $i - 1;?>" id="page"><?php echo $i;?></a></li>
        <?php }?>   
        <button><li><a href="pesquisar.php?page=0">Próximo>></a></li> </button>
    </ul>
</div> 



                        
                    </div>
                </div>
                </div>
            </div>

        </div>

        <div id="copy-area">
        <div class="container fixed-bottom">
          
      <div class="col-md-12">
      <p>Desenvolvido por <a href="https://www.n-s-tecnologia.webnode.com" target="_blank">N&S - Tecnologia</a> © 2020</p>
      </div>
    </div>
  </div>



</body>

</html>