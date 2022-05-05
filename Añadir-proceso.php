<?php

include("conec.php");
    $conexion=Conectarse();
   
    $id=$_POST["cvecte"];
    $nom=$_POST["nombre"];
    $curp=$_POST["curp"]; 
    $dir=$_POST["direccion"];
    $tel=$_POST["telefono"];
    $correo=$_POST["correo"];

    $consulta= "call ALTA_CLIENTE ('".$id."','".$nom."','".$curp."','".$dir."','".$tel."','".$correo."')";

    $resultado = mysqli_query( $conexion, $consulta );
   
   if ($resultado==1) {
        echo "Registro insertado exitosamente...<br>";
        header("Location: Clientes.php");
    }
	else {	
	    echo "Función fallida. Revisa la sintaxis y/o conexion al servidor.<br>";
    }   
  

?>