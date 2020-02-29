<?php
class ControladorUsuarios{

// ===========================================================================
// SECTION: ingreso de usuarios
// ===========================================================================

//=========================== #region [sec1] ===========================
//Región correspondiente a:	ingreso de usuarios

static public function ctrIngresoUsuario (){
    if(isset($_POST["ingUsuario"])){
        if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

            $tabla     = "usuarios";
            $item      = "usuario";
            $valor     = $_POST["ingUsuario"];
            $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

            if ($respuesta["usuario"]  == $_POST["ingUsuario"] &&
                $respuesta["clave"] == $_POST["ingPassword"]){
                $_SESSION["iniciarSesion"]="ok";
                echo '<script>
                    window.location="inicio";
                </script>';
            }else{
                echo "<br><div class='alert alert-danger'>Error al ingresar, vuelve a intentar</div>";
            }
        }
    }
}
//================================ #endregion ================================
// =========================================================
// SECTION: registro de usuarios
// =========================================================

//=========================== #region [sec2] ===========================
//Región correspondiente a:	Registro de Usuarios

static public function ctrCrearUsuario (){
    if (isset($_POST["nuevoUsuario"])){

        if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevaClave"])){

                // #########################################################
                // validar imagen
                // #########################################################
                if(isset($_FILES["nuevaFoto"]["tmp_name"])){

                    // list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
                    // $nuevoAncho = 500;
                    // $nuevoAlto = 500;

                    // #########################################################
                    // crear el directorio donde se va a guardar
                    // #########################################################
                    // $directorio = "vistas/img/usuarios/". $_POST["nuevoUsuario"];
                    // mkdir($directorio, 0755);
                    var_dump($_FILES["nuevaFoto"]["tmp_name"]);
                }

        //         $tabla = 'usuarios';
        //         $datos = array( 'nombre'=> $_POST["nuevoNombre"],
        //                         'usuario' => $_POST["nuevoUsuario"],
        //                         'clave'   => $_POST["nuevaClave"],
        //                         'perfil'  => $_POST["nuevoPerfil"]);
        //         $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
        //         if ($respuesta == "ok"){
        //             echo "
        //                 <script>
        //                     Swal.fire({
        //                         icon: 'success',
        //                         title: '¡El usuario ha sido creado correctamente!',
        //                         confirmButtonText: 'Cerrar',
        //                         closeOnConfirm   : false
        //                     }).then((result)=>{
        //                         if(result.value){
        //                             window.location = 'usuarios';
        //                         }
        //                     });
        //                 </script>
        //             ";
        //         }
            }else{
                echo "
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: '¡El usuario no puede estar vacio o llevar caracteres especiales!',
                            confirmButtonText: 'Cerrar',
                            closeOnConfirm   : false
                        }).then((result)=>{
                            if(result.value){
                                window.location = 'usuarios';
                            }
                        });
                    </script>
                ";
            }
        }
    }
//================================ #endregion ================================

}
