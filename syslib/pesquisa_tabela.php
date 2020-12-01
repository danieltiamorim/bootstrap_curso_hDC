<!doctype html>
    <html class="no-js" lang="">
    
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SysLib</title>

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




  
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- font awesome CSS
            ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- meanmenu CSS
            ============================================ -->
        <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- wave CSS
            ============================================ -->
        <link rel="stylesheet" href="css/wave/waves.min.css">
        <link rel="stylesheet" href="css/wave/button.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- Notika icon CSS
            ============================================ -->
        <link rel="stylesheet" href="css/notika-custom-icon.css">
        <!-- Data Table JS
            ============================================ -->
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="css/main.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

			
<?php

/*
 * Editor server script for DB table livros
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection

	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = 'livraria';

	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
 
  
         

?>

    
    
    <body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">Você está usando um browser <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu browser</a> para melhorar a experiência de navegação.</p>
        <![endif]-->
    <!-- Start Header Top Area -->

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
						<a class="nav-item nav-link" id="home-menu" href="home.php#"></span> Home</a>
						<a class="nav-item nav-link" id="estoque-menu" href="estoque.html#">Estoque</a>
						<a class="nav-item nav-link" id="pesquisa-menu" href="pesquisar.html#">Pesquisa</a>
						<a class="nav-item nav-link" id="pesquisa-menu" href="pedidos.html#">Pedido</a>
						<a class="nav-item nav-link" id="pesquisa-menu" href="cadastro_usuario.html#">Cadastro de Usuário</a>
					</div>
				</div> 
			</nav>
			
			</div>
			</header>
	





    <!-- Breadcomb area Start-->
	

    <br> <br> 



<main>
  <br> <br>
   
    <div class="container-fluid">
          <div id="cadastro">
            <div class="container"> 
              <div class="row">
                <div class="col-12">  
                
                
                <h4 class="main-title"><u>Pesquisa</u></h4> 

 
                <form method="get" action="pesquisa_tabela.php">
                Pesquisar:<input type="text" name="pesquisar" placeholder="ISBN, Autor, Editora ou Título" size="50">
                  <input type="submit" value="BUSCAR">
                </form>
              </div>
            </div>
          </div>
        </div>
        <button> <td><a href='pesquisar.php'>Visualização em Lista</a></button>    
        <button> <td><a href='estoque.html'>Incluir Novo Livro</a></button>    <button><b>  <td><a href='exportar_estante.php'>Exportar Planilha "Estante Virtual" (Completa)</a></button> </b> 
		
           
	<!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">

                            <h2>Resultados em Tabela</h2>
                            <p>                               
                            </p>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                     <tr>  
                        <th>Capa</th>
                        <th>ID_livro</th>
                        <th>ISBN</th>
                        <th>Título</th>
                        <th>Autor</th>
						<th>Editora</th>									
						<th>Estante</th>
						<th>...Preço...</th>
						<th>...Custo...</th>
						<th>Quantidade</th>
						<th>Ano</th>
						<th>Idioma</th>
						<th>................Descrição................</th>
						<th>Estado</th>
						<th>Edição</th>
						<th>Peso</th>
						<th>ID_estante</th>
                    </tr>
                    
				</thead>

                                <tbody>

                                    
                                <?php
                                  $pesquisar = $_GET['pesquisar'];
                                $result = "SELECT * FROM livros WHERE titulo LIKE '%$pesquisar%' or
                         autor LIKE '%$pesquisar%' or
                         editora LIKE '%$pesquisar%' or  
                         isbn LIKE '%$pesquisar%' ORDER BY titulo limit 10";

$resultado= mysqli_query($conn, $result);

while($exibe = mysqli_fetch_assoc($resultado)){
 echo  " <tr>",
 "   <td><img src=".$exibe['capa']." alt=".$exibe['isbn']." widht='140' height='220'/><br></td>",
  "   <td>".$exibe['ID_livro']."</td>",
  "   <td>".$exibe['isbn']."</td>",
  "   <td>".$exibe['titulo']."</td>",
  "   <td>".$exibe['autor']."</td>",
    "   <td>".$exibe['editora']."</td>", 
    "   <td>".$exibe['estante']."</td>",
      "   <td> R$ ".$exibe['preco_venda']."</td>",
      "   <td> R$ ".$exibe['preco_custo']."</td>",
     "   <td>".$exibe['quantidade']."</td>",
      "   <td>".$exibe['ano']."</td>",
      "   <td>".$exibe['idioma']."</td>",
      "   <td>".$exibe['descricao']."</td>",
      "   <td>".$exibe['estado']."</td>",
      "   <td>".$exibe['edicao']."</td>",
       "   <td>".$exibe['peso']." Gramas</td>",
       "   <td>".$exibe['ID_estante']."</td>",
      " </tr>";
}
                    ?>
                                   
                                </tbody>
                                <tfoot>
                                <tr>  
                        <th>Capa</th>
                        <th>ID_livro</th>
                        <th>ISBN</th>
                        <th>Título</th>
                        <th>Autor</th>
						<th>Editora</th>									
						<th>Estante</th>
						<th>Preço</th>
						<th>Custo</th>
						<th>Quantidade</th>
						<th>Ano</th>
						<th>Idioma</th>
						<th>................Descrição................</th>
						<th>Estado</th>
						<th>Edição</th>
						<th>Peso</th>
						<th>ID_estante</th>
                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->



    

                        
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