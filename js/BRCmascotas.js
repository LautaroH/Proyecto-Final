jQuery(document).ready(function(){
  var x= $(document);
  x.ready(inicio);
  function inicio(){
    traernoticias();
  }
  $(".btn_seccion").click(function(){

      var seccion =$(this).attr("seccion");
        $(".btn_seccion").attr("id","fullwidthnav");
        $(this).attr("id","homenav");
        //alert("hola" + seccion);

      $.ajax({
          type:"post",
          url:"secciones/"+ seccion + ".php",
          success: function (resultado) {
            $("#contenedor_seccion").html(resultado);
            switch (seccion) {
              case "adopcion":$("#fotoportada").attr("src","images/adopta.jpg");
                  break;
              case "mascotas":$("#fotoportada").attr("src","images/perdidos.jpg");
                  break;
              case "parejas":$("#fotoportada").attr("src","images/parejas.jpg");
                  break;
              case "veterinarias":$("#fotoportada").attr("src","images/veterinaria.jpg");
                  break;
              case "noticias":$("#fotoportada").attr("src","images/banner.jpg");
                  break;
              default:
            }
          }
        })
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



function traernoticias(){

}
