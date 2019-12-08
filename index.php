<?php
session_name("BRCMascotas");
session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
      <link rel="stylesheet" href="plugins/bootstrap/4.1.3/bootstrap.min.css">
      <link rel="stylesheet" href="css/BRCMascotas.css" />


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
				<h1 style="margin-top:20px"> <a href="javascript:;" id="homenav" class="btn_seccion" seccion="noticias"> MASCOTAS BARILOCHE</h1></a>
				<div id="tagline">
					<h2></h2>
				</div>
				</div>

        <?php
            $hideLogin = "";
            $hideLogout = "style='display:none;'";
            $hidebtn_ingresar = "";
            $hidebtn_registar = "style='display:none;'";
            if (isset($_SESSION["id_usuario"]) ) {
              $hideLogout = "";
              $hideLogin = "style='display:none;'";
              $hidebtn_registar = "";
              $hidebtn_ingresar  = "style='display:none;'";
            }

             ?>

				<nav id="menu">
					<ul>
						<li><a href="javascript:;" id="homenav" class="btn_seccion" seccion="noticias">Inicio</a></li>
						<li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="mascotas">Mascotas Perdidas</a></li>
						<li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="adopcion">Adopcion</a></li>
            <li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="parejas">Parejas</a></li>
            <li><a href="javascript:;" id="fullwidthnav"  class="btn_seccion" seccion="veterinarias">Veterinarias</a></li>
            <li><a href="javascript:;" id="btnMensajes"  class="btn_seccion" <?=$hideLogout?> seccion="mensajes">Mensajes</a></li>

            <li><a href="javascript:;" class="btn_acceder" <?=$hideLogin?> >Login</a></li>
            <li><a href="javascript:;" class="btn_salir" <?=$hideLogout?> >Logout</a></li>
					</ul>
				</nav>
			</header>

			<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->

      	<img id="fotoportada" src="images/banner/banner.jpg" alt="" />

<div id="contenedor_seccion" style="margin-left: 50px">
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
                  <div class="col-md-6" id="login">
                      <h5 style="color:#000";>Login</h5>
                          <form id="form_login">

                            <div class="form-group">
                                <input name="mail" type="text" class="form-control" placeholder="Mail" value="" />
                            </div>
                            <div class="form-group">
                                <input name="clave" type="password" class="form-control" placeholder="Clave" value="" />
                            </div>
                            <div class="form-group">
                                <a href="#" class="btnCuenta" style="color:#F42D09";>Clickeá acá si no tenés cuenta</a>
                            </div>

                          </form>
                  </div>
                  <div class="col-md-6" id="registro">
                    <h5 style="color:#000";>Registrarse</h5>
                      <form id="form_registro">

                          <div class="form-group">
                              <input name="mail" type="text" class="form-control" placeholder="Mail" value="" />
                          </div>

                          <div class="form-group">
                              <input name="usuario" type="text" class="form-control" placeholder="Usuario" value="" />
                          </div>

                          <div class="form-group">
                              <input name="clave" type="password" class="form-control" placeholder="Clave" value="" />
                          </div>

                          <div class="form-group">
                              <input name="confirmar_clave" type="password" class="form-control" placeholder="Confirmar Clave" value="" />
                          </div>

                          <div class="form-group">
                              <a href="#" class="btnCuenta" style="color:#F42D09";>Ingresar con tu cuenta</a>
                          </div>

                        </form>
                    </div>
                  </div>

              </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary btn_ingresar" id="btn_ingresar" <?=$hidebtn_ingresar?> >Ingresar</button>
            <button type="button" class="btn btn-primary btn_registrar" id="btn_registrar" <?=$hidebtn_registar?> >Registrar</button>


          </div>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="modal_chat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="txt_titulo" style="color:#000";>Nueva publicación</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
    				<form id="form_perdidos">
              <div class="chat">
              </div>
              <input class="mytext" placeholder="Escriba su mensaje"/>


    					<!-- <textarea name="txt_mensaje" rows="8" cols="70"></textarea> -->
    				</form>

    				<div class="input-group mb-3">
    					</div>
    					<!-- UPLOAD FOto -->

    </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="enviar">Enviar</button>

          </div>
        </div>
      </div>
    </div>





    	<script src="plugins/jquery/3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
      <script src="plugins/bootstrap/4.1.3/popper.min.js" type="text/javascript"></script>
      <script src="plugins/bootstrap/4.1.3/bootstrap.min.js" type="text/javascript"></script>
      <script src="js/BRCMascotas.js" type="text/javascript"></script>

	</body>
</html>
