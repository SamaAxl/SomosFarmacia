<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmacia</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="header">
    <nav class="navegacion">
      <a href="index.html"><img class="logo" src="img/logo somos.png" alt="Somos Logo"></a>

      <ul>
        <li class="nav-item"><a href="index.html">Inicio</a></li>
        <li class="nav-item"><a href="Clientes.php">Clientes</a></li>
        <li class="nav-item"><a href="Medicamentos.php">Medicamentos</a></li>
        <li class="nav-item"><a href="Movimientos.php">Movimientos</a></li>
        <li class="nav-item"><a href="Proveedores.php">Proveedores</a></li>
        <li class="nav-item"><a href="Facturas.php">Facturas</a></li>
      </ul>
    </nav>
  </header>
  <main class="main">
    <article class="container-table">
      <?php

  $usuario = "root";
  $password = "";
	$servidor = "localhost";
	$basededatos = "farmacia";

  // creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

  // Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	
  // establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM farmacia.facvtae";

  $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
?>
      <div class="table">
        <table>
          <tr>
            <th>Número de Factura</th>
            <th>Fecha</th>
            <th>Total</th>
            <th>Tipo de Pago</th>
            <th>Id Cliente</th>
          </tr>

          <?php
  //Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo 
    "<td>" .$columna['numfac']."</td> 
		<td>". $columna['fecha'] . "</td> 
		<td>" . $columna['total'] . "</td>
		<td>" . $columna['tipopago'] . "</td>
		<td>" . $columna['cvecte'] . "</td";
		echo "</tr>";
	}

  //Cerrar conexión de base de datos
	mysqli_close( $conexion );

?>

        </table>
      </div>
    </article>
  </main>
  <footer class="footer">
    <article class="footer-item">
      <h1>Somos Software.</h1>
    </article>
    <article class="footer-item">
      <p>Más sobre nosotros</p>
      <ul>
        <li><a href="">Sección 1</a></li>
        <li><a href="">Sección 2</a></li>
        <li><a href="">Sección 3</a></li>
        <li><a href="">Sección 4</a></li>
        <li><a href="">Sección 5</a></li>
      </ul>
    </article>
  </footer>
</body>

</html>