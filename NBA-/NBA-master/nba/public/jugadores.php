<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de equipos</title>
    <link rel="stylesheet" href="./css/nba.css">
  </head>
  <body><!-- Menú de navegación. -->
  <?php include "./assets/navSup.php"; ?>

<?php
//Me conecto con la base de datos.
$conector=new mysqli ("localhost","root","","nba");
if ($conector-> connect_errno) {
  echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
}
else {
$resultado=$conector->query("select * from jugadores");
//Sale por pantalla la consulta.
foreach ($resultado as $jugadores) {
  echo"<br>Codigo: ".$jugadores["codigo"];
  echo"<br>Nombre: ".$jugadores["Nombre"];
  echo"<br>Procedencia: ".$jugadores["Procedencia"];
  echo"<br>Altura: ".$jugadores["Altura"];
  echo"<br>Peso: ".$jugadores["Peso"];
  echo"<br>Posicion: ".$jugadores["Posicion"];
  echo"<br>Nombre_equipo: ".$jugadores["Nombre_equipo"];
  echo"<br>";
  }
}
 ?>
 <!-- contenido -->
 <div class="container">

 </div>
 <!--Footer -->
 <?php include "./assets/footer.html"; ?>
  </body>
</html>
