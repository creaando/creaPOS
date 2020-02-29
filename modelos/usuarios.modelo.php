<?php
require_once "conexion.php";

class ModeloUsuarios{
    // ================================
    // MOSTRAR USUARIOS
    // ================================
    static public function mdlMostrarUsuarios($tabla, $item, $valor){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt -> bindParam(':'.$item,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt->fetch(); //fetch ==> retorna una sola linea de la tabla
            $stmt -> close();
            $stmt = null;
    }
    // ===========================================================================
    // SECTION: Registro de usuarios
    // ===========================================================================
    //=========================== #region [sec2] ===========================
    //Región correspondiente a:	registro de usuarios

    static public function mdlIngresarUsuario ($tabla, $datos ){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, clave, perfil) VALUES (:nombre, :usuario, :clave, :perfil)");
        $stmt -> bindParam(':nombre',  $datos['nombre'],  PDO::PARAM_STR);
        $stmt -> bindParam(':usuario', $datos['usuario'], PDO::PARAM_STR);
        $stmt -> bindParam(':clave',   $datos['clave'],   PDO::PARAM_STR);
        $stmt -> bindParam(':perfil',  $datos['perfil'],  PDO::PARAM_STR);

        if ($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }
        $stmt -> close();
        $stmt -> null;
    }
    //================================ #endregion ================================

}
