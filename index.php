<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
      <link rel="stylesheet" href="plugins/bootstrap/4.1.3/bootstrap.min.css">
      <link rel="stylesheet" href="css/BRCmascotas.css" />


        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>MASCOTAS BARILOCHE</title>
    </head>
	<body id="home">
		<div id="wrapper">

			<!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
			<header>
				<div id="logo">
				<h1>MASCOTAS BARILOCHE</h1>
				<div id="tagline">
					<h2></h2>
				</div>
				</div>

				<nav id="menu">
					<ul>
						<li><a href="javascript:;" id="homenav" class="btn_seccion" seccion="noticias">Inicio</a></li>
						<li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="mascotas">Mascotas Perdidas</a></li>
						<li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="adopcion">Adopcion</a></li>
            <li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="parejas">Parejas</a></li>
            <li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="veterinarias">Veterinarias</a></li>
            <li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="perfil">Perfil</a></li>
            <li><a href="javascript:;" class="btn_acceder">Login</a></li>
					</ul>
				</nav>
			</header>

			<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->

      	<img id="fotoportada" src="images/banner/banner.jpg" alt="" />

<div id="contenedor_seccion">
    <h1>Aca va el contenido</h1>
</div>
			<!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
			<!-- <footer>
        <p>Posted by: Hege Refsnes</p>
         <p>Contact information: <a href="mailto:someone@example.com">
         someone@example.com</a>.</p>
			</footer> -->
		</div>
    <div class="modal fade" id="modal_acceder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="container login-container">
              <div class="row">
                  <div class="col-md-6" id="form_login">
                      <h5 style="color:#000";>Login</h5>

                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Usuario" value="" />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Contraseña" value="" />
                          </div>
                          <div class="form-group">
                              <a href="#" class="btnCuenta" style="color:#F42D09";>Clickeá acá si no tenés cuenta</a>
                          </div>
                  </div>
                  <div class="col-md-6" id="form_registro">
                    <h5 style="color:#000";>Registrarse</h5>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Mail" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Usuario" value="" />
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" value="" />
                        <div class="form-group">
                            <a href="#" class="btnCuenta" style="color:#F42D09";>Ingresar con tu cuenta</a>
                        </div>
                    </div>
                  </div>

              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Registrarse</button>
            <button type="button" class="btn btn-primary" id="publicar">Ingresar</button>

          </div>
          </div>
        </div>
      </div>
    </div>




    	<script src="plugins/jquery/3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
      <script src="plugins/bootstrap/4.1.3/popper.min.js" type="text/javascript"></script>
      <script src="plugins/bootstrap/4.1.3/bootstrap.min.js" type="text/javascript"></script>
      <script src="js/BRCmascotas.js" type="text/javascript"></script>

	</body>
</html>
