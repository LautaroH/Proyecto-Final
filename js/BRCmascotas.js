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
