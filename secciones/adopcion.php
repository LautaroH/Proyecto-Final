
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
              <a  class="btnCssFunc btn btn-warning btn-block btn_adopcion" tipo="3">Perro en adopción</a>
            </div>
          </div>
<br>


<div id="lista_adopcion">

</div>
		</div>

</section>



<!-- ModalAdopcion -->
<!-- <div class="modal fade" id="modal_encontrado_perdido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
<div class="modal fade" id="modal_adopcion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="txt_titulo" style="color:#000";>Perro en adopción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<!-- <form id="form_perdidos"> -->
				<form id="form_adopcion">
					<textarea name="txt_mensaje" rows="8" cols="70"></textarea>
						<input type="text" name="tipo" value="0" id="txt_tipo">
				</form>

				<div class="input-group mb-3">
					</div>
					<!-- UPLOAD FOto -->
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
		<form id="up_foto">
			<input type="file" class="custom-file-input" id="id_foto" aria-describedby="inputGroupFileAddon01" name="foto">
			<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
		</form>

  </div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="publicar">Publicar</button>

      </div>
    </div>
  </div>
</div>
<script src="js/Adopcion.js" type="text/javascript"></script>
