<h1 class="col 6 center"><span class="blue-text text-darken-2 center">Categorias</span></h1>

<!-- Defino el boton ingreso  -->


<!-- Modal  -->

<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4> <i class="material-icons left">group_add
      </i> <span class="blue-text text-darken-2">Ingreso Categoria</span></h4>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="titulo" type="text" class="validate">
            <label for="titulo">Titulo</label>
          </div>
        </div>
    </div>
    </form>
  </div>
<div class="modal-footer">
<a href="#!" class="modal-close waves-effect waves-green btn z-depth-3 blue">
      Aceptar
    </a>
</div>
</div>

<!-- Defino mi tabla -->

<table class="striped">
  <thead>
    <tr>
      <th class="center blue-text" ><h5>Categoria</h5></th>
           <th> <a class="waves-effect waves-light btn modal-trigger z-depth-3 blue right" href="#modal1">
    <i class="material-icons left">group_add
    </i>Ingreso</a></th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td class="center">Alvin</td>
     
      <td>
        <div class="right">
          <a class="btn-floating btn-small waves-effect waves-light blue ">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Modificar">edit</i>

          </a>
          <a class="btn-floating btn-small waves-effect waves-light red">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Eliminar">delete</i>
          </a>
        </div>
      </td>
    </tr>
    <tr>
      <td class="center">Alan</td>
     
      <td>
        <div class="right">
          <a class="btn-floating btn-small waves-effect waves-light blue ">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Modificar">edit</i>

          </a>
          <a class="btn-floating btn-small waves-effect waves-light red">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Eliminar">delete</i>
          </a>
        </div>
      </td>
    </tr>
    <tr>
      <td class="center">Jonathan</td>
      
      <td>
        <div class="right">
          <a class="btn-floating btn-small waves-effect waves-light blue ">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Modificar">edit</i>

          </a>
          <a class="btn-floating btn-small waves-effect waves-light red">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Eliminar">delete</i>
          </a>
        </div>
      </td>
    </tr>
    <tr>
      <td class="center">Adam</td>
     
      <td>
        <div class="right">
          <a class="btn-floating btn-small waves-effect waves-light blue ">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Modificar">edit</i>

          </a>
          <a class="btn-floating btn-small waves-effect waves-light red">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Eliminar">delete</i>
          </a>
        </div>
      </td>
    </tr>
    <tr>
      <td class="center">Daniel</td>
      
      <td>
        <div class="right">
          <a class="btn-floating btn-small waves-effect waves-light blue ">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Modificar">edit</i>

          </a>
          <a class="btn-floating btn-small waves-effect waves-light red">
            <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Eliminar">delete</i>
          </a>
        </div>
      </td>
    </tr>
    <!--  **** Paginador **** -->
    <tr class="blue accent-3">
      <td colspan="6">
        <ul class="pagination center">
          <li class="disabled"><a href="#!"><i class="material-icons white-text">chevron_left</i></a></li>
          <li class="active"><a href="#!" class="light-blue">1</a></li>
          <li class="waves-effect"><a href="#!" class="white-text">2</a></li>
          <li class="waves-effect"><a href="#!" class="white-text">3</a></li>
          <li class="waves-effect"><a href="#!" class="white-text">4</a></li>
          <li class="waves-effect"><a href="#!" class="white-text">5</a></li>
          <li class="waves-effect"><a href="#!"><i class="material-icons white-text">chevron_right</i></a></li>
        </ul>
      </td>
    </tr>

  </tbody>

</table>