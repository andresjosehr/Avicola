
                  <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
                  <li><a><i class="fa fa-edit"></i> Maestros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      {{$Modulos}}
                      @foreach ($Modulos as $Modulo)
                        @if ($Modulo->modulo_padre=="maestros")
                          <li><a href="{{$Modulo->ruta}}">{{$Modulo->Descripcion}}</a></li>
                        @endif
                      @endforeach
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i> Guías <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @foreach ($Modulos as $Modulo)
                        @if ($Modulo->modulo_padre=="guias")
                          <li><a href="{{$Modulo->ruta}}">{{$Modulo->Descripcion}}</a></li>
                        @endif
                      @endforeach
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Facturación <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      @foreach ($Modulos as $Modulo)
                        @if ($Modulo->modulo_padre=="facturacion")
                          <li><a href="{{$Modulo->ruta}}">{{$Modulo->Descripcion}}</a></li>
                        @endif
                      @endforeach
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    @foreach ($Modulos as $Modulo)
                      @if ($Modulo->modulo_padre=="reportes")
                        <li><a href="{{$Modulo->ruta}}">{{$Modulo->Descripcion}}</a></li>
                      @endif
                    @endforeach
                  </li>
                  <li><a><i class="fa fa-user"></i> Seguridad <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="usuarios">Usuarios</a></li>
                      <li><a href="grupos-usuarios">Grupos usuarios</a></li>
                      <li><a href="#">Permisos por Trabajo</a></li>
                      <li><a href="#">Gestion de Backups</a></li>
                    </ul>
                  </li>