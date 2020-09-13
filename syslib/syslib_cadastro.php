

<?php
//syslib_cadastro.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
	$titulo = $_POST["titulo"]; //set PHP variables like this so we can use them anywhere in code below
	$u_autor = $_POST["autor"];	
	$isbn = $_POST ["isbn"];
	$preco = $_POST ["preco"];
	$u_quantidade = $_POST["quantidade"];
	$editora = $_POST["editora"];
	$ano = $_POST["ano"];
	$edicao = $_POST["edicao"];
	$estado = $_POST["estado"];
	$custo = $_POST["custo"];
	$descricao = $_POST["descricao"];
	
	
	//print output text
	print "Aí sim! Livro cadastrado com sucesso!";
	print " Clique aqui para cadastrar mais um super livro"; 
}
?>

<html>
<head> 
</head>
<body><
/br>
<a href="https://danieltiamorim.github.io/syslib/#"> Clique aqui para continuar cadastrando! </a>
</body>

 </html>