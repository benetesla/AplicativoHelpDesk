<? require_once 'Validador.php' ?>
<?php 

$dados = array();
//abrir sessao
$arquivo = fopen('../../App_Help_desk/teste.txt', 'r');
//feof = verifica se o ponteiro esta no final do arquivo
//fgets = ler uma linha do arquivo
//explode = divide uma string em um array
while (!feof($arquivo)) {
    $registro = fgets($arquivo);
    $chamados [] = $registro; 
}
//fechar arquivo
fclose($arquivo);
//exibir dados do arquivo na tela

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      * {
        margin: 0;
        padding: 0;}
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
       body {
        background-color: #28bfe3;
 background-image: url("CallCenter.svg");
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
       <ul class="navbar-nav ml-auto"><!-- ml-auto para colocar o botão direito -->
        <li class="nav-item">
          <a class="nav-link" href="sair.php">Sair</a></li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header navbar-dark bg-primary">
              <strong>Consulta de chamado</strong>
            </div>
            
            <div class="card-body">
              <?php foreach($chamados as $chamado){ ?>

              <?php
                $chamado_dados = explode('#', $chamado);
               
                //consultar dados do chamado
                
                  //exibir todos os chamados
                if(count($chamado_dados) < 3){
                  continue;
                }
              ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[0]?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[1]?></h6>
                  <p class="card-text"><?= $chamado_dados[2]?></p>

                </div>
              </div>

              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>