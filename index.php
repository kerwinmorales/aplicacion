<?php

require_once "app/controladores/perfil.controlador.php";
require_once "app/controladores/plantilla.controlador.php";
require_once "app/controladores/producto.controlador.php";
require_once "app/controladores/registro.controlador.php";



require_once "app/modelos/conexion.php";






$plantilla = new ControladorPlantilla();

$plantilla -> ctrPlantilla();