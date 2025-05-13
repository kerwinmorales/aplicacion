<?php



class ModeloProducto {

    /*=============================================
    Registrar producto
    =============================================*/
    static public function mdlProducto($tabla, $datos){
        $sql = "INSERT INTO {$tabla} 
                    (prod_categoria, prod_nombre, prod_marca, prod_modelo, prod_precio, prod_cantidad) 
                VALUES 
                    (:categoria, :nombre, :marca , :modelo, :precio, :cantidad)";

        $stmt = Conexion::conectar()->prepare($sql);
        $stmt->bindParam(":categoria",   $datos["categoria"],   PDO::PARAM_STR);
        $stmt->bindParam(":nombre",   $datos["nombre"],   PDO::PARAM_STR);
        $stmt->bindParam(":marca",   $datos["marca"],   PDO::PARAM_STR);
        $stmt->bindParam(":modelo",   $datos["modelo"],   PDO::PARAM_STR);
        $stmt->bindParam(":precio",   $datos["precio"],   PDO::PARAM_STR);
        $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);

        $ok = $stmt->execute();
        $stmt->closeCursor();
        return $ok ? "ok" : "error";
    }
}
