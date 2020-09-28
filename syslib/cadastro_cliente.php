<html lang="pt-br">
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

</head>

<body>
  <header> 
    
		<div class="container" id="nav-container">
			<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
				<a class="navbar-brand" href="index.html"> 
					<img id="logo" src="logo.png"> SysLib: Cadastro de Clientes
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
	<br /><br />




			<?php



			//syslib_cadastro.php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = 'livraria';

	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
		
	//Check it is coming from a form
	$nome_cliente = $_POST["nome_cliente"]; //set PHP variables like this so we can use them anywhere in code below
	$cep = $_POST["cep"];
	$rua = $_POST["rua"];	
	$bairro = $_POST ["bairro"];
	$num_casa = $_POST ["num_casa"];
	$data_nascimento = $_POST ["data_nascimento"];
	$email = $_POST["email"];
	$telefone1 = $_POST["telefone1"];
	$telefone2 = $_POST["telefone2"];
	$cpf = $_POST["cpf"];
	$rg = $_POST["rg"];
	
		




if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{
$sql = "INSERT INTO clientes (nome_cliente, cep, rua, bairro, num_casa, data_nascimento, email, telefone1, telefone2, cpf , rg)
values ('$nome_cliente', '$cep', '$rua', '$bairro', '$num_casa', '$data_nascimento', '$email', '$telefone1', '$telefone2', '$cpf', '$rg', '$filename')";
		  
	


}

if (move_uploaded_file($filename, $capas))  { 
	$msg = "Image uploaded successfully"; 
}else{ 
	$msg = "Failed to upload image"; 
} 


if ($conn->query($sql)){
		//print output text
echo "Aí sim! Livro cadastrado com sucesso! </br>"; 
	print " Clique aqui para cadastrar mais um super livro </br>"; 
}








else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();

	


		?>	

<a href='estoque.html#'> Clique aqui para continuar cadastrando! </a>


<div id='copy-area'>
<div class="container">
		  
			  <div class='col-md-12'>
				<p>Desenvolvido por <a href='https://www.n-s-tecnologia.webnode.com' target='_blank'>N&S - Tecnologia</a> © 2020</p>
			  </div>
		  </div>
		</div>
</body>
		</html> 
	