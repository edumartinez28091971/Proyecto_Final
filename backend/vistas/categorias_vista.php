<h1 class="col 6 center"><span class="blue-text text-darken-2 center">Categorias</span></h1>

<!-- Defino el boton ingreso  -->

<div>
  <a class="waves-effect waves-light btn modal-trigger z-depth-3 blue right" href="#modal1">
    <i class="material-icons left">group_add
    </i>Ingreso</a>
</div>

<!-- Modal  -->

<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4> <i class="material-icons left">group_add
      </i> <span class="blue-text text-darken-2">Ingreso</span></h4>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Disabled</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            This is an inline input field:
            <div class="input-field inline">
              <input id="email_inline" type="email" class="validate">
              <label for="email_inline">Email</label>
              <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>

<!-- Defino mi tabla -->

<table class="striped">
  <thead>
    <tr>
      <th class="center">Nombre</th>
      <th class="center">Item Nombre</th>
      <th class="center">Item Precio</th>
      <th class="right">Botones</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td class="center">Alvin</td>
      <td class="center">Eclair</td>
      <td class="center">$0.87</td>
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
      <td class="center">Jellybean</td>
      <td class="center">$3.76</td>
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
      <td class="center">Lollipop</td>
      <td class="center">$7.00</td>
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
      <td class="center">Quest</td>
      <td class="center">$8.00</td>
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
      <td class="center">Rodriguez</td>
      <td class="center">$6.00</td>
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
