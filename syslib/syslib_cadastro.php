

<?php
//syslib_cadastro.php


if ($_SERVER["REQUEST_METHOD"] == "POST") 
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = 'livraria' ;
	
	
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	
	{//Check it is coming from a form
	$titulo = $_POST["titulo"]; //set PHP variables like this so we can use them anywhere in code below
	$autor = $_POST["autor"];	
	$isbn = $_POST ["isbn"];
	$preco_venda = $_POST ["preco_venda"];
	$preco_custo = $_POST ["preco_custo"];
	$quantidade = $_POST["quantidade"];
	$editora = $_POST["editora"];
	$ano = $_POST["ano"];
	$edicao = $_POST["edicao"];
	$estado = $_POST["estado"];
	$idioma = $_POST["idioma"];
	$estante = $_POST["estante"];
	

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{
$sql = "INSERT INTO livros (titulo, autor, isbn, preco_custo, preco_venda, quantidade, editora, ano, edicao, estado, idioma , estante)
values ('$titulo', '$autor', '$isbn', '$preco_custo', '$preco_venda', '$quantidade', '$editora', '$ano', '$edicao', '$estado', '$idioma', '$estante')";
}

if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}


else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}



		//print output text
	print "Aí sim! Livro cadastrado com sucesso!";
	print " Clique aqui para cadastrar mais um super livro"; 

?>

<a href="#"> Clique aqui para continuar cadastrando! </a>


