<?php
$(function () {
  $('[data-toggle="popover"]').popover()
})
?>
<html lang="en">
  <head>
    <title>ICGNU</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <body>

      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <form class="form-inline">
          <img src="/img/logo.png">
          <button class="btn btn-outline-success" type="button">Main button</button>
          <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
      </form>
    </nav>



    <div class="container">
      <div class="row">
        <div class="col col-lg-2" style="right: 117px; top: 18px;">
         <div class="card" style="width: 18rem;">
          <div class="card-body">
          <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link active" href="/public/inicio.html">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/public/pastas.html">Pastas compartilhadas</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Configurar</a>
                <div class="dropdown-menu">
                   <a class="dropdown-item" href="/public/addShared.html">Adicionar section</a>
                   <a class="dropdown-item" href="/public/removerShared.html">Remover section</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Adicionar options</a>
                   <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Perfil</a>
            </li>
          </ul>
         </div>
       </div>
      </div>

    <div class="col" style="top: 17px;">


      <div class="jumbotron">
        <h1 class="display-4">Pastas</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <div class="container">
        <div class="row" id="shares"></div>
        </div>
      </div>

    </div>
    </div>
    </div>
    <script src="../js/pastas.js"></script>
  </body>

  </html>
