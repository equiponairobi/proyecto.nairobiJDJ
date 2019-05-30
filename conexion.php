<?php
 $server="localhost"; 
 $user="root"; 
 $pass=""; 
 $db="bdNairobi"; 
   
 // connect to postgresql 
   
 postgresql_connect($server, $user, $pass) or die("Lo siento, no se puede conectar al servidor."); 
 $acentos = $conexion->query("SET NAMES 'UTF8'");
   
 // select the db 
   
 mysql_select_db($db) or die("Lo siento, no se puede conectar  a la base de datos."); 

?>


  