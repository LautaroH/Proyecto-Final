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
				<h1 style="margin-top:20px">MASCOTAS BARILOCHE</h1>
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
            <li><a href="javascript:;" class="btn_acceder" <?=$hideLogin?> >Login</a></li>
            <li><a href="javascript:;" class="btn_salir" <?=$hideLogout?> >Logout</a></li>
					</ul>
				</nav>
			</header>


			<!--__--__--__--__--  T H E    S L I D E R --__--__--__--___--__--__--__-->
      <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
          <img src="images/slide1.jpg" alt="" />
        </div>
      </div>
			<script type="text/javascript">
			$(window).load(function() {
				$('#slider').nivoSlider({pauseTime: 6000,});
			});
			</script>

			<!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
			<section>
				<div id="ourserv">
				</div>
				<div id="sline">
					<div class="sdline"></div>

					<div class="sdline"></div>
				</div>

			</section>
			<!--__--__--__--__--  T H E    F O O T E R --__--__--__--___--__--__--__-->
			<footer>

			</footer>
		</div>
	</body>
</html>
