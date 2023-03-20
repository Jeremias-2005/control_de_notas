<?php
/*Conexión entre php y la base de datos "notas" de postgresql */
    $conexion=pg_connect("host=localhost dbname=notas user=notasadmin password=incasnotas");

?>