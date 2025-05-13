<?php 
include "app/modelos/producto.modelo.php";
class ControladorProducto {
    static public function ctrProducto(){
        
        if(isset($_POST["productoNombre"])){

            $tabla = "productos";
            $datos = array(
                
                "categoria" => $_POST["productoCategoria"],
                "nombre" => $_POST["productoNombre"],
                "marca" => $_POST["productoMarca"],
                "modelo" => $_POST["productoModelo"],
                "precio" => $_POST["productoPrecio"], 
                "cantidad" => $_POST["productoCantidad"]          

            );

            $respuesta = ModeloProducto::mdlProducto($tabla, $datos);

            return $respuesta;

        }


    }
}