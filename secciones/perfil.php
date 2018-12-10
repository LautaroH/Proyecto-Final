<?php
session_name("BRCMascotas");
session_start();
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
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

				<nav>
					<ul>
						<li><a href="index.php" id="fullwidthnav">Inicio</a></li>
						<li><a href="mascotas.php" id="fullwidthnav">Mascotas Perdidas</a></li>
						<li><a href="adopcion.php" id="fullwidthnav">Adopcion</a></li>
            <li><a href="parejas.php" id="fullwidthnav">Parejas</a></li>
            <li><a href="Veterinarias.php" id="fullwidthnav">Veterinarias</a></li>
            <li><a href="perfil.php" id="homenav">Perfil</a></li>
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
