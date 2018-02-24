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
     <link href="../css/login.css" rel="stylesheet">
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
          <h1 style="margin-top: 2% ; margin-left: 825px ; "> Login </h1>
            <div style="margin-left: 770px ;" class="row">
              <div class="col">

              <div class="card border-info mb-3" style="height: 25rem ; width: 20rem ;" >

                <div class="card-body text-dark">
                  <form class="mt-2 mx-2" action="" method="POST">
                <div class="md-form">
                       <i class="fa fa-envelope prefix grey-text"></i>
                       <label for="defaultForm-email">Usuario</label>
                       <input type="text" name="usuario" id="defaultForm-email" class="form-control">
                   </div>

                   <div class="md-form">
                       <i class="fa fa-lock prefix grey-text"></i>
                       <label for="defaultForm-pass">Senha</label>
                       <input type="password" name="passwd" id="defaultForm-pass" class="form-control">
                   </div>
                <div class="col-md-4 text-center">
                  <button type="submit" style="margin-top: 28px;"class="btn btn-outline-info btn-lg" name="btn-entrar">Entrar</button>
                </div>
              <form>
                <a href="Cadastrar.php">Cadastrar</a>
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
    if (isset($_POST['btn-entrar'])) {
        $user = $_POST['usuario'];
        $senha = $_POST['passwd'];
        $auth_success = false;

        if (empty($user) || empty($senha)) { //Função do alerta
            echo "<script> document.querySelector('#alert-login').innerHTML = '<div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\"><strong>Ops!</strong> Você precisa preencher todos os campos.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>' </script>";
        } else {
            $sql = 'SELECT * FROM users';
            $row = $conn->query($sql);

            foreach ($conn->query($sql) as $row) { //Verifica a existência no banco de dados
                if ($row['usuario'] == $user && $senha == $row['passwd']) {

                    $_SESSION['email'] = $row['usuario'];
                    $_SESSION['senha'] = $row['passwd'];
                    $_SESSION['id'] = $row['id'];

                    $auth_success = true;

                    echo "<script> window.location = \"/public/inicio.php\" </script>";
                    break;
                }
            }

            if (!$auth_success) {

                echo "<script> document.querySelector('#alert-login').innerHTML = '<div class=\"alert alert-danger alert-dismissible fade show my-3\" role=\"alert\"><strong>Ops!</strong> Usuário ou senha inválidos.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>' </script>";

            }
        }
    }
?>
