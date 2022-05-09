<?php
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//remover indices de um array
//usando o unset
/*unset ($_SESSION['logado']);


echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//destruir sessao
//session_destroy();
//forca um redirecionamento para a pagina de login
session_destroy();

session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';*/
session_destroy();
header("Location: index.php");//redireciona para a pagina de login

?>