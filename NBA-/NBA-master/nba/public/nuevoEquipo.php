<?php
  require "./../src/Equipo.php";
  $equipo = new Equipo();
  $error=$equipo->comprobarCampos($_POST);
  $BD=$equipo->conexionBD();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nuevo equipo</title>
    <link rel="stylesheet" href="./css/nba.css">
  </head>
  <body>
    <!-- Menú de navegación. -->
    <?php include "./assets/navSup.php"; ?>
    <!-- Error. -->
    <?php if (isset($error)) {
      echo "$error";
    } ?>
    <h1>Nuevo Equipo</h1>
    <!-- Formulario de inserción. -->
    <form class="formNBA" action="nuevoEquipo.php" method="post">
      <div class="grupoFormItem">
        <label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="Ciudad">Ciudad</label>
        <input type="text" name="Ciudad" value="">
      </div>
      <div class="grupoFormItem">
        <label for="conferencia">Conferencia</label>
        <input type="text" name="conferencia" value="">
      </div>
      <div class="grupoFormItem">
        <label for="division">Division</label>
        <input type="text" name="division" value="">
      </div>
      <!-- Botón de inserción. -->
      <div class="grupoFormItem">
        <input type="submit" name="Insert" value="Insert">
      </div>
    </form>
    <div class="container2">

    </div>
    <?php include "./assets/footer.html"; ?>
  </body>
</html>
