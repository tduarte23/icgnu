<?php
    require_once "../php/database.php";
    session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>ICGNU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-3">
        <h1 class="display-1"> IGCNU
        </h1>
      </div>
        <div class="col">
          <div class="row">
        <small class="text-muted">Interface</small>
      </div>
          <div class="row">
          <small class="text-muted">Gráfica de Configuração</small>
        </div>
        <div class="row">
           <small class="text-muted">E Navegação Unificada</small>
         </div>
        </div>
      </div>
      </div>

        <div class="container">
          <h1 style="margin-top: 2% ; margin-left: 500px ; "> Cadastro </h1>
            <div style="margin-left: 420px ;" class="row">
              <div class="col">

              <div class="card border-info mb-3" style="height: 25rem ; width: 20rem ;" >

                <div class="card-body text-dark">
                  <form class="mt-2 mx-2" action="" method="POST">
                <div class="md-form">
                       <i class="fa fa-envelope prefix grey-text"></i>
                       <label for="defaultForm-user">Usuario</label>
                       <input type="text" name="usuario" id="defaultForm-user" class="form-control">
                   </div>

                   <div class="md-form">
                       <i class="fa fa-lock prefix grey-text"></i>
                       <label for="defaultForm-pass">Senha</label>
                       <input type="password" name="passwd" id="defaultForm-pass" class="form-control">
                   </div>
                <div class="col-md-4 text-center">
                  <button type="submit" style="margin-top: 28px;"class="btn btn-outline-info btn-lg" name="btn-Cadastrar">Cadastrar</button>
                </div>
              <form>

              </div>
            </div>
              </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
<?php
        if (isset($_POST['btn-Cadastrar'])) {

            $user = $_POST['usuario'];
            $senha = $_POST['passwd'];



                $sql = "SELECT * FROM users WHERE usuario = '$user'";
                $ja_existente = false;

                foreach ($conn->query($sql) as $row) {
                    $aux = true;
                }
                if ($aux) {
                    echo "usjario ja existe";
                } else { 
                    $sql = "INSERT INTO users (usuario, passwd) VALUES ('$user', '$senha')";
                    $cadastrar = $conn->query($sql);
                    if ($cadastrar) {
                      echo "<script> window.location = \"/public/login.html\" </script>";
                    }
                }

        }
?>
