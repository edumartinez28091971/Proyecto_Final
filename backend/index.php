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

    table.striped>tbody>tr:nth-child(odd) {
      background-color:#b3e5fc ;
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav-wrapper blue z-depth-3  ">
      <a href="#" class="brand-logo center"><i class="Large material-icons">blur_on</i>Panel - Admin</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down ">
        <li><a href="Deportistas.html">Deportistas</a></li>
        <li><a href="Categorias.html">Categorias</a></li>
        <li><a href="Noticias.html">Noticias</a></li>
        <li><a href="Usuarios.html">Usuarios</a></li>
      </ul>
    </div>
  </nav>

  <!-- Defino mi container dinamico-->

  <main>
    <div class="container">

      <h1>Hola soy el container</h1>

      <!-- Defino mi tabla -->

      <table class="striped">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Item Nombre</th>
            <th>Item Precio</th>
            <th>Botones</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
          <tr>
            <td>Adam</td>
            <td>Quest</td>
            <td>$8.00</td>
          </tr>
          <tr>
            <td>Daniel</td>
            <td>Rodriguez</td>
            <td>$6.00</td>
          </tr>
        </tbody>
      </table>





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

</body>



</html>