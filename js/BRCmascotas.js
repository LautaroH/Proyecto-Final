jQuery(document).ready(function(){
  var x= $(document);
  x.ready(inicio);
  function inicio(){

    irASeccion("noticias");
  }


  $(".btn_seccion").click(function(){
    var seccion =$(this).attr("seccion");
      $(".btn_seccion").attr("id","fullwidthnav");
      $(this).attr("id","homenav");
      irASeccion(seccion);

  })


        function irASeccion(seccion){

            //alert("hola" + seccion);

          $.ajax({
              type:"post",
              url:"secciones/"+ seccion + ".php",
              success: function (resultado) {
                $("#contenedor_seccion").html(resultado);
                switch (seccion) {
                  case "adopcion":$("#fotoportada").attr("src","images/banner/adopta.jpg");
                      break;
                  case "mascotas":
                      $("#fotoportada").attr("src","images/banner/perdidos.jpg");
                      traerlistamascotas();
                      break;
                  case "parejas":$("#fotoportada").attr("src","images/banner/parejas.jpg");
                      break;
                  case "veterinarias":$("#fotoportada").attr("src","images/banner/veterinaria.jpg");
                      break;
                  case "noticias":$("#fotoportada").attr("src","images/banner/banner.jpg");
                      break;
                      op
                  default:
                }
              }
            })
        }




      $("#contenedor_seccion").on("click", "#publicar", function(){
        // var datos={
        //   edad:25,
        //   nombre:"Laura",
        // }
        var formData = new FormData();
        var file = $("#id_foto")[0].files[0];
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
            var datos = $("#form_perdidos").serialize();
            datos = datos+"&id_foto="+ id_foto;
            $.ajax({
              type:"post",
              data:datos,
              url:"assets/ABM_publicacion.php",
              success: function(resultado){
                alert("Publicación cargada con éxito");
                $("#modal_encontrado_perdido").modal("hide");
                traerlistamascotas();
              }

            })

            alert("Publicación cargada con éxito");
          }
        });


      })


      function traerlistamascotas(){
          $.ajax({
            type:"post",
            url:"secciones/lista_mascotas.php",
            success: function (resultado) {
              $("#lista_mascotas").html(resultado);
}
          })
      }



$("#contenedor_seccion").on("click", ".btn_encontrado_perdido", function(){
  var tipo=$(this).attr("tipo");//0 o 1

    $("#txt_tipo").val(tipo);
    $("#txt_titulo").text("Perro Encontrado");
    if (tipo==0)  {
      $("#txt_titulo").text("Perro Perdido");
    }





  $("#modal_encontrado_perdido").modal("show");



});


  //
  // function traertarjetas(){
  //   alert("HOLO");
  //   // $.ajax({
  //   //   type:"post",
  //   //   url:"assets/tareas_ajax.php",
  //   //   success: function (resultado) {
  //   //     $("#tareas").html(resultado);
  //   //   }
  //   // })
  // }



})
