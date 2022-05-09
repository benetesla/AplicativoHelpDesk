<?php
session_start();
if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
    header("Location: index.php?login=erro");
}




//variavel para verificar se o usuario esta logado
$logado = false;
$usuario_id = null;
$usuario_perfil = true;

$perfis = array(1 => 'Administrador', 2 => 'Usuario');


//usuario do sistema
$usuario = array(
    array('id' => 1,'email' => 'adm@teste.com.br', 'senha' => '123456','perfil' => 1),
    array('id' => 2,'email' => 'user@teste.com.br', 'senha' => '123456','perfil' => 2),
    array('id' => 3,'email' => 'Benego@teste.com.br', 'senha' => '123456','perfil' => 2),
    array('id' => 4,'email' => 'Tesla@teste.com.br', 'senha' => '123456','perfil' => 2),
 );
 
    foreach ($usuario as $user ) 
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['Senha']) {
            $logado = true;
            $usuario_id = $user['id'];
            $usuario_perfil = $user['perfil'];
    
            //criasessao para armazenar o usuario logado
    }
    if ($logado) {
        echo "Usuario logado com sucesso";
        $_SESSION['logado'] = true;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil'] = $usuario_perfil;

        header("Location: home.php");
    }else {
        $_SESSION['logado'] = false;
       header("Location: index.php?login=erro");
       
    }


?>