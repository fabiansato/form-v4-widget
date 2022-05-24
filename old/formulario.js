//console.log("funcionando");
$("#formulario").submit(function(event){
    event.preventDefault(); //almacena los datos sin refrescar el sitio web.

});

function enviar(){
  console.log("ejecutado");
   var datos = $("#formulario").serialize(); //toma los datos "name" y los lleva a un arreglo.
   console.log("datos:",datos);

    $.ajax({
        type: "post",
        url:"backend/backend.php",
        data: datos,
        success: function(texto){
            if(texto=="exito"){
                correcto();
            }else{
                phperror(texto);
            }
        }
    })
}
function correcto(){
    $("#mensajeExito").removeClass("d-none");
    $("#mensajeError").addClass("d-none");
}
function phperror(texto){
    $("#mensajeError").removeClass("d-none");
    $("#mensajeError").html(texto);
}