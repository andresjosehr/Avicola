<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Granja Avicola</title>
    <link rel="stylesheet" href="{{asset("css/template.css")}}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link rel="stylesheet" href="{{asset("css/of.css")}}">
    <script src="{{asset("js/off.js")}}"></script> --}}

         <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
     <script src="http://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"></script>

  <script> var url = '{{Request::root()}}' </script>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i style="border: 0px" class="fa fa-egg"></i> <span> Granja Avicola</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset("images/template/img.jpg")}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{session()->get("nombre")}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="#"><i class="fa fa-home"></i> Inicio</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Maestros <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="mantenedores">Mantenedores</a></li>
                      <li><a href="clientes">Clientes</a></li>
                      <li><a href="proveedores">Proovedores</a></li>
                      <li><a href="contactos">Contactos</a></li>
                      <li><a href="tipo_productos">Tipo</a></li>
                      <li><a href="categorias">Categorias</a></li>
                      <li><a href="productos">Productos</a></li>
                      <li><a href="#">Almacen</a></li>
                      <li><a href="cargos">Cargos</a></li>
                      <li><a href="choferes">Choferes</a></li>
                      <li><a href="automoviles">Autos</a></li>
                      <li><a href="empleados">Empleados</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i> Guías <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="guias-entrada">Guía de Entrada</a></li>
                      <li><a href="guia-salida">Guía Salida</a></li>
                      <li><a href="#">Guía Pedido</a></li>
                      <li><a href="#">Liquidación Venta Diaria</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Facturación <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Factura Electronica</a></li>
                      <li><a href="#">Boleta Electronica</a></li>
                      <li><a href="#">Anulación de Boleta</a></li>
                      <li><a href="#">Nota de Credito</a></li>
                      <li><a href="#">Resumenes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Ventas</a></li>
                      <li><a href="#">Cuentas por Cobrar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Seguridad <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="usuarios">Usuarios</a></li>
                      <li><a href="#">Permisos por Trabajo</a></li>
                      <li><a href="#">Gestion de Backups</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Cerrar Sesión" href="login.html" style="width:100%">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset("images/template/img.jpg")}}" alt="">{{session()->get("nombre")}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="CerrarSesion"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesion</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        
