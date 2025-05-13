<?php

    class Conexion{

        static public function conectar(){

            $link = new PDO("mysql:host=localhost:3306;dbname=motorider","root","0505");
            return $link;

        }

    }