jQuery(document).on('submit','#formLg',function(event){

    event.preventDefault();
    jQuery.ajax({
        url:'login.php',
        type:'POST',
        dataType:'json',
        data:$(this).serialize(),
        
    })

    .done(function(respuesta){
        console.log(respuesta);
        console.log(respuesta.tipo_usuario);
        if (!respuesta.error) {

            if (respuesta.tipo_usuario == '5') {
                location.href = '.vistas/maestro.php';
            }else if (respuesta.tipo_usuario == '6') {
                location.href = '.vistas/alumno.php';
            }

        }else {

            $('.error').slideDown('slow');
            setTimeout(function(){
                $('.error').slideUp('slow');
            },3000);
            
        }
    })

    .fail(function(resp){
        console.log(resp.responseText);
    })

    .always(function(){
        console.log("complete");
    });
});

jQuery(document).on('submit','#formLg',function(event){
    

});

function siguiente() {
    
    document.getElementById("seccion_usuario").style.display = "none";
    document.getElementById("seccion_persona").style.display="block";
    document.getElementById("siguiente").style.display = "none";
    document.getElementById("atras").style.display="block";

}

function atras() {
    
    document.getElementById("seccion_usuario").style.display = "block";
    document.getElementById("seccion_persona").style.display="none";
    document.getElementById("atras").style.display="none";
    document.getElementById("siguiente").style.display="block";

}
