<?php
require 'conexao.php';
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$id = $_GET['id'];
$delete = (" DELETE  FROM livros  WHERE ID_livro = '$id'");



if ($conn->query($delete)){
    //print output text
echo "Livro deletado </br>"; 
print " <a href='pesquisar.html#'> Pesquisa </a>  Clique aqui para retornar  </br>"; 
}








else{
echo "Error: ". $delete ."
". $conn->error;
}
$conn->close();




?>
