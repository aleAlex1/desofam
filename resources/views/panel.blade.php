@section('panel')
<div class="panelContainer">
  <div class="leftMenu">
    <div class="logoPanel"></div>
    <div id="opciones">
        <ul class="list-group list-group-flush">
          <li class="list-group-item menu" data-toggle="collapse" href="#collapseCat" role="button" aria-expanded="false" aria-controls="collapseCat"><a>Usuarios</a></li>
          <div class="collapse" id="collapseCat">
            <div class="card card-body">
              <ul>
                <li><a href="{{ route('add') }}" ng-click="">Agregar</a></li>
                <li><a href="{{ route('showUsr') }}" ng-click="">Ver</a></li>
              </ul>
            </div>
          </div>
          <li class="list-group-item menu" data-toggle="collapse" href="#collapseConf" role="button" aria-expanded="false" aria-controls="collapseConf"><a>Mensajes</a></li>
          <div class="collapse" id="collapseConf">
            <div class="card card-body">
              <ul>
                <li><a href="{{ route('mails') }}" ng-click="">Mensajes nuevos</a></li>
                <li><a href="{{ url('/admin/index/tickets') }}" ng-click="">Mensajes con ticket</a></li>
              </ul>
            </div>
          </div>
        </ul>
      </div>
  </div>
</div>
@show
