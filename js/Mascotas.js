//MODAL QUE SIRVE PARA LA PUBLICACION DE PERROS PERDIDOS Y ENCONTRADOS (LO SUBE A LA BASE DE DATOS)
  $("#contenedor_seccion").on("click", "#publicar", function(){
    // var datos={
    //   edad:25,
    //   nombre:"Laura",
    // }
    var formData = new FormData();
    var file = $("#id_foto")[0].files[0];

    if (file == undefined){
      guardarMensaje(0);
      return;
    }
    //  formData.append("username", "Groucho");
      // HTML file input, chosen by user
      formData.append("foto", file);

    $.ajax({
      //async: true,
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      url: "assets/up_foto.php",
      type: "POST",
      success: function(id_foto){
        guardarMensaje(id_foto);
      }
    });


  })
  function guardarMensaje(id_foto) {

    var datos = $("#form_perdidos").serialize();
    datos = datos+"&id_foto="+ id_foto;
    $.ajax({
      type:"post",
      data:datos,
      url:"assets/ABM_publicacion.php",
      success: function(resultado){
        alert("Publicación cargada con éxito");
        $('#form_perdidos').trigger("reset");
        $('#up_foto').trigger("reset");
        $("#modal_encontrado_perdido").modal("hide");
        traerlistamascotas();
      }

    })

    //alert("Publicación cargada con éxito");

  }
  //SUBE LA TARJETA A LA SECCIÓN
  function traerlistamascotas(){
      $.ajax({
        type:"post",
        url:"secciones/lista_mascotas.php",
        success: function (resultado) {
          $("#lista_mascotas").html(resultado);
}
      })
  }

  //ABRE EL MODAL Mascotas
  $("#contenedor_seccion").on("click", ".btn_encontrado_perdido", function(){
    var tipo=$(this).attr("tipo");//0 o 1

      $("#txt_tipo").val(tipo);
      $("#txt_titulo").text("Perro Encontrado");
      if (tipo==0)  {
        $("#txt_titulo").text("Perro Perdido");
      }

    $("#modal_encontrado_perdido").modal("show");

  });
