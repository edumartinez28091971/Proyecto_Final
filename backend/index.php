<?php

// echo("Estoy iniciando mi proyecto");
// PHPINFO();

?>

<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="web/css/materialize.css" media="screen,projection" />
  <!--uso micss-->
  <link type="text/css" rel="stylesheet" href="web/css/micss.css" media="screen,projection" />


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--  El siguiente style lo uso para posicionar el footer abajo -->

  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    
  </style>
</head>

<body>
  <nav>
    <div class="nav-wrapper blue z-depth-3  ">
      <a href="#" class="brand-logo center"><i class="Large material-icons">blur_on</i>Panel - Admin</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down ">
        <li>
          <a href="index.php?r=deportistas">Deportistas</a>
        </li>
        <li>
          <a href="index.php?r=categorias">Categorias</a>
        </li>
        <li>
          <a href="index.php?r=noticias">Noticias</a>
        </li>
        <li>
          <a href="index.php?r=usuarios">Usuarios</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Defino mi container dinamico-->

  <main>
    <div class="container">


<?php include("router.php");  ?>
    
</div>
  </main>

  <!--Defino mi Footer -->

  <footer class="page-footer blue">
    <div class="footer-copyright">
      <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">Panel</a>
      </div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="web/js/materialize.min.js"></script>
  <!--JavaScript para activar modal-->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      M.AutoInit();
      
    });
  </script>
</body>

</html>