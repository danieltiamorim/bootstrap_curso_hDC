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
  <br> <br>
   
    <div class="container-fluid">
          <div id="cadastro">
            <div class="container"> 
              <div class="row">
                <div class="col-12">  
                
                
                <h4 class="main-title"><u>Pesquisa</u></h4> 

 
                <form method="POST" action="pesquisar.php">
                Pesquisar:<input type="text" name="pesquisar" placeholder="ISBN, Autor, Editora ou Título" size="50">
                  <input type="submit" value="BUSCAR">
                </form>
              </div>
            </div>
          </div>
        </div>
            
        <button> <td><a href='estoque.html'>Incluir Novo Livro</a></button>    <button><b>  <td><a href='exportar_estante.php'>Exportar Planilha "Estante Virtual" (Completa)</a></button> </b> 
		
           
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
                                
                                    // Botão de exportação Excel
                            
                                  
                                    echo "<button><b>  <td><a href='imprimir.php?pesquisar=$pesquisar'>Imprimir resultados</a></button></b>";                                         
                             

$limit = 150;
$ini   =  $limit;                                     
$result_livros = "SELECT * FROM livros WHERE quantidade > 0 and titulo LIKE '%$pesquisar%' or
autor LIKE '%$pesquisar%' or
editora LIKE '%$pesquisar%' or  
isbn LIKE '%$pesquisar%' ORDER BY titulo limit  $limit ";

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
        "  <b> ISBN: </b> ".$exibe ['isbn']."<br>",                                                                     
        "  <b> ID: </b> ".$exibe ['ID_livro']."<br>",   

     
            "</table>";

            $id = $exibe['ID_livro'];
            $isbn = $exibe['isbn'];
           echo "<button> <td><a href='editar.php?id=$id?isbn=$isbn'>Editar</a></button> <b> OU </b> "; 
           echo "<button> <td><a href='delete.php?id=$id'><font color='red'>Excluir</font></a></button> </p>";
            
          }
   
         
          

          $sql2 = "SELECT count(*) as count FROM livros ";
          $resultado2 = mysqli_query($conn, $sql2); 
          $row  = mysqli_fetch_assoc($resultado2);
          $total_registros = $row['count'];
          $num_paginas     = ceil($total_registros / $limit);
     


                          ?>



<div>
    <ul class="pagination pagination-sm pull-right">
        <li><a href="pesquisar.php?page=<?php echo $num_paginas -1?>" id="anterior"><button><< Anterior </button></a></li>
        <?php
            for($i = 1; $i <= $num_paginas; $i++){ ?>
                <li><a href="pesquisar.php?page=<?php echo $i - 1;?>"> <?php echo $i;?>  </a>    </li>
        <?php }?>   
        <li><a href="pesquisar.php?page=0"><button>Próxima>> </button></a></li>
    </ul>
</div> 



                        
                    </div>
                </div>
                </div>
            </div>

        </div>

        <div id="copy-area">
        <div class="container">
          
      <div class="col-md-12">
      <p>Desenvolvido por <a href="https://www.n-s-tecnologia.webnode.com" target="_blank">N&S - Tecnologia</a> © 2020</p>
      </div>
    </div>
  </div>



</body>

</html>