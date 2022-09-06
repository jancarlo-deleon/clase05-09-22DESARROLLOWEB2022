<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bbica1zkyuuhpf6cd3it-mysql.services.clever-cloud.com","ukhe5rwgmmnwx39c","aANsMXUsOI19VhpwxbKl","bbica1zkyuuhpf6cd3it");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }