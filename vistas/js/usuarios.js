// ======================================================================
//	subir la foto del usuario
// ======================================================================
$(".nuevaFoto").change(function(){
    var imagen = this.files[0];
    // console.log("imagen", imagen);

// ======================================================================
//	validar el formato de la imagen (png o jpg)
// ======================================================================
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

        $(".nuevaFoto").val("");
            Swal.fire({
                icon: 'error',
                title: 'Error al subir la imágen',
                text:'¡La imágen debe estar en formato JPG o PNG!',
                confirmButtonText: 'Cerrar'
            });

    }else if(imagen["size"] > 2000000){

        $(".nuevaFoto").val("");
            Swal.fire({
                icon: 'error',
                title: 'Error al subir la imágen',
                text: '¡La imágen no debe pesar mas de 2Mb',
                confirmButtonText: 'Cerrar'
            });
    }else{

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){
            var rutaImagen = event.target.result;
            $(".previsualizar").attr("src", rutaImagen);
        })
    }
})
