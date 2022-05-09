<? require_once 'Validador.php' ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      * {
        margin: 0;
        padding: 0;}
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
        background-color: #fff;
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
        <img src="logo.png
        " width="60" height="60" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
       <ul class="navbar-nav ml-auto"><!-- ml-auto para colocar o botão direito -->
        <li class="nav-item">
          <a class="nav-link" href="sair.php">Sair</a></li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header navbar-dark bg-primary">
              <strong>Abrir Chamado</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="Titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="Categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="Descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>