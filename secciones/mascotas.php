		  <!--__--__--__--__--  M A I N   C O N T E N T  --__--__--__--___--__--__-->
			<section>
        <div id="line">
					<div class="dline"></div>
					<h1>Noticias</h1>
					<div class="dline"></div>
				</div>

				<div id="ourserv">
          <div class="row">
            <div class="col">
              <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#mdlPerdido">Me perdí</a>
            </div>
            <div class="col">
              <a class="btn btn-success btn-block"  data-toggle="modal" data-target="#mdlEncontrado">Me encontraron</a>
            </div>
          </div>
<br>


<div id="lista_mascotas">

</div>
			<!-- <article>
				<div class="card text-center alert bg-primary">
					<img class="" src="images/perdido.jpg" alt="">
					<br>
					<p>Se escapó anoche en el kilómetro 12600, lo vieron por la ruta parada km13 aquiles, pitbull marrón, con collar rojo. Cualquier cosa comunicarse a 2944332727</p>
						<div class="card-body">
							<a href="#" class="btn btn-primary alert alert-light">Contactar Usuario</a>
						</div>
				</div>
		  </article>

			<article>
				<div class="card text-center alert bg-primary">
					<img class="" src="images/perdido2.jpg" alt="">
					<br>
					<p>Perro adulto mayor con dificultad para caminar en onelli y 25 de Mayo</p>
						<div class="card-body">
							<a href="#" class="btn btn-primary alert alert-light">Contactar Usuario</a>
						</div>
				</div>
      </article>

			<article>
				<div class="card text-center alert bg-primary">
					<img class="" src="images/perdido3.jpg" alt="">
					<br>
					<p>Se perdió en  villa lago gutierrez llamar al 2944920440</p>
						<div class="card-body">
							<a href="#" class="btn btn-primary alert alert-light">Contactar Usuario</a>
						</div>
				</div>
      </article>

			<article>
				<div class="card text-center alert bg-success">
					<img class="" src="images/perdido4.jpg" alt="">
					<br>
					<p>Está en la zona de gallardo y Rivadavia. Se nota que está perdido!!</p>
						<div class="card-body">
							<a href="#" class="btn btn-success alert alert-light">Contactar Usuario</a>
						</div>
				</div>
      </article>

			<article>
				<div class="card text-center alert bg-success">
					<img class="" src="images/perdido5.jpg" alt="">
					<br>
					<p>Se extravió caniche macho sin cola con collar azul en San Francisco 3 agradecere info</p>
						<div class="card-body">
							<a href="#" class="btn btn-success alert alert-light">Contactar Usuario</a>
						</div>
				</div>
			</article> -->

			<article>
				<div class="card text-center alert bg-success">
					<img class="" src="images/perdido6.jpg" alt="">
					<br>
					<p>Está este perro en la entrada a las victorias con colla verde</p>
						<div class="card-body">
							<a href="#" class="btn btn-success alert alert-light">Contactar Usuario</a>
						</div>
				</div>
			</article>

		</div>
</section>



<!-- Modal -->
<div class="modal fade" id="mdlPerdido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:#000";>Modal perdido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<form id="form_perdidos">
					  <input type="text" name="txt_mensaje" value="">
				</form>

				<div class="input-group mb-3">
					</div>
					<!-- UPLOAD FOto -->
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="publicar">Publicar</button>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="mdlEncontrado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:#000";>Modal encontrado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="" value="">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
