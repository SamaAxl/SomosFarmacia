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
      <form action="Modificar.php" method="post">
        <label for="nombre">Nombre del Cliente</label>
        <input id="nombre" type="text" name="nombre">
        <input type="submit" name="accion" value="Buscar">
      </form>
      <div class="links">
        <ul>
          <li><a href="Clientes.php">Regresar</a></li>
        </ul>
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