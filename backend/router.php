<?php

if(isset($_GET['r']) && $_GET['r'] != ""){

    $ruta = $_GET['r'];

    if ($ruta == "deportistas"){
       
        include("vistas/deportistas_vista.php");

    }elseif($ruta=="categorias"){

        include("vistas/categorias_vista.php");

}elseif($ruta=="noticias"){

    include("vistas/noticias_vista.php");

}elseif($ruta=="usuarios"){
 include("vistas/usuarios_vista.php");

}else{
    echo("<h1>Bienvenidos a mi Panel</h1>");
}

}else{
    echo("<h1>Bienvenidos a mi Panel</h1>");
}
?>