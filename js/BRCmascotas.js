jQuery(document).ready(function(){
  var x= $(document);
  x.ready(inicio);
  function inicio(){
    $("#form_registro").hide(); //Ocultar el formulario de registro, dejando visible el de inicio de session
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
          //AJAX QUE CAMBIA DE SECCION SIN TENER QUE RECARGAR TODA LA PÁGINA
          $.ajax({
              type:"post",
              url:"secciones/"+ seccion + ".php",
              success: function (resultado) {
                $("#contenedor_seccion").html(resultado);
                switch (seccion) {
                  case "adopcion":$("#fotoportada").attr("src","images/banner/adopta.jpg");
                    traerlistaadopcion();
                      break;
                  case "mascotas":
                      $("#fotoportada").attr("src","images/banner/perdidos.jpg");
                      traerlistamascotas();
                      break;
                  case "parejas":$("#fotoportada").attr("src","images/banner/parejas.jpg");
                      traerlistaparejas();
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



//       function traerlistaadopcion() {
//         $.ajax({
//           type:"post",
//           url:"secciones/lista_adopcion.php",
//           success: function (resultado) {
//             $("#lista_adopcion").html(resultado);
// }
//         })
//       }




// ABRE EL MODAL ADopcion
$("#menu").on("click", ".btn_acceder", function(){

  $("#modal_acceder").modal("show");

});




$("#modal_acceder").on("click", ".btnCuenta", function(){
  $("#form_registro,#form_login" ).toggle();
//  $("#form_login").hide();
})

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
