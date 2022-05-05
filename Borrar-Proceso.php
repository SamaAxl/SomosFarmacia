<?php
   include("conec.php");
   $conexion=Conectarse();
  
   
   $cvecte=$_GET["cvecte"];
   $consulta="call DELETE_CLIENTE(".$cvecte.");";
   
   $resultado = mysqli_query( $conexion, $consulta ) ;
   
   echo "borrando el registro: ";
   echo 'valor de resultado'.$resultado;
   
   echo "valor de funcion mysql_query ". $resultado."<br>";
   
      if ($resultado==1) {
	   echo "Registro borrado exitosamente...";
      header("Location: Borrar.php");
	}
      else {
		echo "Función fallida. Revisar sintaxis y/o conexion del servidor";
	}   
?>