jQuery(document).ready(function(){
  var x= $(document);
  x.ready(inicio);
  function inicio(){
    $("#registro").hide(); //Ocultar el formulario de registro, dejando visible el de inicio de session
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
                  case "noticias":
                      $("#fotoportada").attr("src","images/banner/banner.jpg");
                      traerlistanoticias();
                      break;
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




// ABRE EL MODAL PARA LOGEARSE/REGISTRARSE
$("#menu").on("click", ".btn_acceder", function(){

  $("#modal_acceder").modal("show");

});

//PARA QUE SE ESCONDA O VEA EL ENTRAR O SALIR DE LA SESION
$("#modal_acceder").on("click", ".btnCuenta", function(){
  $("#registro,#login" ).toggle();

  $("#btn_registrar,#btn_ingresar").toggle();
//  $("#form_login").hide();
});

  //ES PARA LOGEARSE
  $("#modal_acceder").on("click", "#btn_ingresar", function (){

    var datos = $("#form_login").serialize();
    // datos = datos+"&id_foto="+ id_foto;
    $.ajax({
      type:"post",
      data:datos,
      url:"assets/login_ajax.php",
      success: function(resultado){
        if (resultado=="Falso") {
          alert("Revisar sus datos o registrarse");

          $("#btnPerfil").hide();

          return;
        }
        alert("funciona gato");

        $("#modal_acceder").modal("hide");
        
        $("#btnPerfil").show();

        $(".btn_salir").show();
        $(".btn_acceder").hide();
      }

    })
  })
  //Logout
  $(".btn_salir").click(function (){

    $.ajax({
      type:"post",
      url:"assets/logout_ajax.php",
      success: function(resultado){
        if (resultado=="Ok") {
          alert("Sesion cerrada");

          $("#btnPerfil").hide();
          $(".btn_salir").hide();
          $(".btn_acceder").show();
        }
      }
    })
  })
  //PARA REGISTRARSE
  $("#modal_acceder").on("click", "#btn_registrar", function (){



    var clave1=$("#clave").attr('value');
    var clave2=$("#confirmar_clave").attr('value');

    if (clave1!=clave2) {
      alert("Clave incorrecta");
      return;
    }


    var datos = $("#form_registro").serialize();
    // datos = datos+"&id_foto="+ id_foto;
    $.ajax({
      type:"post",
      data:datos,
      url:"assets/registrarse_ajax.php",
      success: function(resultado){
        if (resultado=="Ok") {
          alert("Registrado con éxito");
          return;
        }

        alert("Registrado con éxito");

        $("#modal_acceder").modal("hide");

        $(".btn_salir").show();
        $(".btn_acceder").hide();
        $('#form_registro').trigger("reset");
      }

    })
  })

  //ABRE EL MODAL Mascotas
  $("#contenedor_seccion").on("click", ".contactar_usuario", function(e){
    e.preventDefault();
    $("#modal_chat").modal("show");

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
