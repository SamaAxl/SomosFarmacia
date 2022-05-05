<?php
    include("conec.php");
    $link=Conectarse();

    $Sql="call ACTUALIZAR_CLIENTE('".$_POST["cvecte"]."','".$_POST["nombre"]."','".$_POST["curp"]."','".$_POST["direccion"]."','".$_POST["telefono"]."','".$_POST["correo"]."');";

    echo $Sql;

    $resultado=mysqli_query($link,$Sql);
 
    if ($resultado==1) {
        echo "Registro modificado exitosamente...";
        header("Location: Clientes.php");
	}
    else {
		echo "Función fallida. Revisar sintaxis y/o conexion del servidor";
	} 
?>