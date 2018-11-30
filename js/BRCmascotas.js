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
              //AJAX QUE CAMBIA DE SECCION SIN TENER QUE RECARGAR TODA LA PÁGINA
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



//       function traerlistaadopcion() {
//         $.ajax({
//           type:"post",
//           url:"secciones/lista_adopcion.php",
//           success: function (resultado) {
//             $("#lista_adopcion").html(resultado);
// }
//         })
//       }




//ABRE EL MODAL ADopcion
// $("#contenedor_seccion").on("click", ".btn_adopcion", function(){
//   var tipo=$(this).attr("tipo");//0 o 1
//
//     $("#txt_tipo").val(tipo); //tendría que ser 3 (si esto funciona) por ende amarillo
//     $("#txt_titulo").text("Perro en adopcion");
//     if (tipo==3)  {
//       $("#txt_titulo").text("Perro Perdido");
//     }
//
//   $("#modal_adopcion").modal("show");
//
// });

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
