<?php

require_once ("login.php");

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App help desk</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
   
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <strong> BEM VINDO AO SITE! <strong> 
        <h6>agradecemos a preferência!</h6>
      </a>
    <ul class="navbar-mav">
      <li class="nav-item">
        <button onclick="location.href='logoff.php'" class="botão-sair" type="button">
</li>
</ul>
</nav>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_abrir_chamado.png" width="70" height="70">
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_consultar_chamado.png" width="70" height="70">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>