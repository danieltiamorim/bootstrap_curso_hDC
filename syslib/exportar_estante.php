<?php

$dadosxls = "<meta charset='utf-8'>";
$dadosxls .= "<table border='1'>";
$dadosxls .=" <tr>";
$dadosxls .="   <th> ID Estante</th>";
$dadosxls .="   <th> ERRO</th>";
$dadosxls .="   <th> ISBN/ISSN</th>";
$dadosxls .="   <th> Autor*</th>";
$dadosxls .="   <th> Título*</th>";
$dadosxls .="   <th> Editora*</th>";
$dadosxls .="   <th> Ano*</th>";
$dadosxls .="   <th> Estante* </th>";
$dadosxls .="   <th> Preço* </th>";
$dadosxls .="   <th> Conservação: Descrição* </th>";
$dadosxls .="   <th> Peso (g) </th>";
$dadosxls .="   <th> Tipo de publicação: Revista/Livro </th>";
$dadosxls .="   <th> Tipo: Novo/Usado </th>";
$dadosxls .="   <th> Edição Número </th>";
$dadosxls .="   <th> Número</th>";
$dadosxls .="   <th> Idioma </th>";
$dadosxls .="   <th> Volume </th>";
$dadosxls .="   <th> Acabamento </th>";
$dadosxls .="   <th> Conservação de usados: Sem marcas de uso / Aparência de novo </th>";
$dadosxls .="   <th> Conservação de usados: Amarelo </th>";
$dadosxls .="   <th> Conservação de usados: Manchas/bolor </th>";
$dadosxls .="   <th> Conservação de usados: Grifos/Anotações </th>";
$dadosxls .="   <th> Conservação de usados: Amassados/Orelha </th>";
$dadosxls .="   <th> Conservação de usados: Rasgos </th>";
$dadosxls .="   <th> Outros diferenciais: Dedicatória </th>";
$dadosxls .="   <th> Outros diferenciais: Autógrafo </th>";
$dadosxls .="   <th> Assunto </th>";
$dadosxls .="   <th> Localização </th>";

$dadosxls .=" </tr>";

include_once('conexao.php');
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$result = "SELECT * FROM livros where quantidade > 0 ORDER BY titulo";

$resultado= mysqli_query($conn, $result);

foreach ($resultado as $res) { 
    $dadosxls .=" <tr>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td>".$res['isbn']."</td>";
    $dadosxls .="   <td>".$res['autor']."</td>";
    $dadosxls .="   <td>".$res['titulo']."</td>";
    $dadosxls .="   <td>".$res['editora']."</td>";
    $dadosxls .="   <td>".$res['ano']."</td>";
    $dadosxls .="   <td>".$res['estante']."</td>";
    $dadosxls .="   <td>".$res['preco_venda']."</td>";
    $dadosxls .="   <td>".$res['descricao']."</td>";
    $dadosxls .="   <td>".$res['peso']."</td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td>".$res['idioma']."</td>";
    $dadosxls .="   <td>".$res['estado']."</td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td>".$res['edicao']."</td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .="   <td></td>";
    $dadosxls .=" </tr>";
}
    $dadosxls .=" </table>";

$arquivo = "exportação_estante.xls";



header('Content-Type: application/xls;charset=UTF-8');
header('Content-Disposition: attachment;filename="'.$arquivo.'"');
header ('Cache-Control: max-age=0');
echo $dadosxls;
exit;
?>
