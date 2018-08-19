<ul class="sidebar-menu" data-widget="tree">

  <li class="header">Menú</li>
  <!-- Optionally, you can add icons to the links -->

  <li>
    <a href="{{route('index', $user->id)}}"><i class="fa fa-dashboard"></i> <span>Inicio</span></a>
  </li>
  @guest
  @else
  <li>
    <a href="{{route('logout')}}"><i class="fa fa-close"></i> <span>Cerrar Sesión</span></a>
  </li>
  @endguest

</ul>