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
$resultado=$conector->query("select * from equipos");
//Sale por pantalla la consulta.
foreach ($resultado as $equipos) {
  echo"<br>Nombre: ".$equipos["Nombre"];
  echo"<br>Ciudad ".$equipos["Ciudad"];
  echo"<br>Conferencia: ".$equipos["Conferencia"];
  echo"<br>Division: ".$equipos["Division"];
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
