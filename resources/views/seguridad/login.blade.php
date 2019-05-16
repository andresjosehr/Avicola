
@include("seguridad.general")
<body class="login">
	<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="loginForm" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
              <h1>Panel de acceso</h1>
              <div>
                <input type="text" class="form-control" id="email" data-parsley-type="email" placeholder="Correo" required="">
              </div>
              <div>
                <input type="password" class="form-control" id="password" placeholder="Contraseña" required="">
              </div>
              <div>
                <button onclick="ValidarGeneral('loginForm', 'login', 'seguridad')" class="btn btn-default submit btn-block btn_avicola">Ingresar</button>
                <div align="center">
                  <div class="loading_avicola" style="display:none;width: 35px;height: 35px;"></div>
                </div>
                <a href="resetPass">¿Olvidaste tu contraseña?</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br>
                <div>
                  <h1><i class="fa fa-egg"></i> Graja Avicola Sebastian</h1>
                  <p>©2019 Todos los derechos reservadors.</p>
                </div>
              </div>
            </form>
          </section>
        </div>
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="">
              </div>
              <div>
                <input type="email" data-parsley-type="email" required="" class="form-control" placeholder="Email" required="">
              </div>
              <div>
                <input type="password" required="" class="form-control" placeholder="Password" required="">
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br>
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script>
    	$(document).ready(function(){
    		$("#sidebar-menu").css("display", "none");
    	})
    </script>

    <style>
      .parsley-errors-list{
        margin-top: -16px;
      }
    </style>

@include("seguridad.footer")
