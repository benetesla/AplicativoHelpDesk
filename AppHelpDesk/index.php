<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      * {
        margin: 0;
        padding: 0;}
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
        App Help Desk
      
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header navbar-dark bg-primary">
              Login
            </div>
            <div class="card-body">
              <form  action="http://localhost/AppHelpDesk/valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="Senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
   <div class="text-danger">
      Faça login para acessar o sistema.
    </div>
<?}?>

                <button class="btn btn-lg btn-info btn-block"  type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>