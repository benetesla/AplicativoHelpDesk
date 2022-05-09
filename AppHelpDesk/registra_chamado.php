<?php
session_start();

echo '<pre>';
print_r($_POST);
echo '</pre>';

//criar sessao para armazenar o usuario logado
$titulo = str_replace('#', '-' ,$_POST['Titulo']);
$categoria =str_replace('#', '-', $_POST['Categoria']);
$descricao =str_replace('#', '-', $_POST['Descricao']);
//abrindo o arquivo
$arquivo = fopen('../../App_Help_desk/teste.txt', 'a');




$texto =$_SESSION['id']. '#' . $_POST['Titulo'] . "#".$_POST['Categoria'] . "#".$_POST['Descricao']. PHP_EOL;

//escrevendo no arquivo
fwrite ($arquivo, $texto); //escreve o texto no arquivo
//fechando o arquivo
fclose($arquivo); //fecha o arquivo

header("Location: abrir_chamado.php");
/*echo '<pre>';
echo $texto;
echo '</pre>';*/

?>