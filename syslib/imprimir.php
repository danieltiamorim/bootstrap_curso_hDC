<?php

$pesquisar = $_GET['pesquisar'];

$dadosxls = "";
$dadosxls .= "<table border='1'>";
$dadosxls .=" <tr>";
$dadosxls .="   <th> ID_livro </th>";
$dadosxls .="    <th> editora </th>";
$dadosxls .="   <th> livro </th>";
$dadosxls .="   <th> autor </th>";
$dadosxls .="   <th> estante </th>";
$dadosxls .="   <th> preco_venda </th>";
$dadosxls .="   <th> preco_custo </th>";
$dadosxls .="   <th> quantidade </th>";
$dadosxls .="   <th> ano </th>";
$dadosxls .="   <th> isbn </th>";
$dadosxls .="   <th> descricao </th>";
$dadosxls .="   <th> estado </th>";
$dadosxls .="   <th> edicao </th>";
$dadosxls .="   <th> Id_image </th>";
$dadosxls .="   <th> Filename </th>";
$dadosxls .="   <th> peso </th>";
$dadosxls .="   <th> capa </th>";
$dadosxls .=" </tr>";

include_once('conexao.php');
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$result = "SELECT * FROM livros WHERE titulo LIKE '%$pesquisar%' or
                         autor LIKE '%$pesquisar%' or
                         editora LIKE '%$pesquisar%' or  
                         isbn LIKE '%$pesquisar%' ORDER BY titulo";

$resultado= mysqli_query($conn, $result);

foreach ($resultado as $res) { 
    $dadosxls .=" <tr>";
    $dadosxls .="   <td>".$res['ID_livro']."</td>";
    $dadosxls .="   <td>".$res['editora']."</td>";
    $dadosxls .="   <td>".$res['titulo']."</td>";
    $dadosxls .="   <td>".$res['autor']."</td>";
    $dadosxls .="   <td>".$res['estante']."</td>";
    $dadosxls .="   <td>".$res['preco_venda']."</td>";
    $dadosxls .="   <td>".$res['preco_custo']."</td>";
    $dadosxls .="   <td>".$res['quantidade']."</td>";
    $dadosxls .="   <td>".$res['ano']."</td>";
    $dadosxls .="   <td>".$res['isbn']."</td>";
    $dadosxls .="   <td>".$res['descricao']."</td>";
    $dadosxls .="   <td>".$res['estado']."</td>";
    $dadosxls .="   <td>".$res['edicao']."</td>";
    $dadosxls .="   <td>".$res['Id_image']."</td>";
    $dadosxls .="   <td>".$res['Filename']."</td>";
    $dadosxls .="   <td>".$res['peso']."</td>";
    $dadosxls .="   <td>".$res['capa']."</td>";
    $dadosxls .=" </tr>";
}
    $dadosxls .=" </table>";

$arquivo = "livros.xls";


header('Content-Type: application/xls');
header('Content-Disposition: attachment;filename="'.$arquivo.'"');
header ('Cache-Control: max-age=0');
echo $dadosxls;
exit;
?>
