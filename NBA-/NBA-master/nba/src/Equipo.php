<?php
  /**
   * Equipo
   */
  class Equipo
  {
    private $conexion=null;
    private $nombre;
    function __construct()
    {
    }
    public function comprobarCampos($post){
      $error=null;
      if (!isset($post)||!isset($post["Nombre"])||!isset($post["Ciudad"])||!isset($post["Conferencia"])||!isset($post["Division"])) {
        $error = "";
      }elseif ($post["Nombre"] == "") {
        $error = "No has introducido ningún nombre de equipo.";
      }elseif ($post["Ciudad"] == "") {
        $error = "No has introducido ninguna ciudad.";
      }elseif ($post["Conferencia"] == "") {
        $error = "No has introducido ninguna conferencia.";
      }elseif ($post["Division"] == "") {
        $error = "No has introducido ninguna division.";
      }
      return $error;
    }
    public function conexionBD(){
      $conexion=new mysqli ("localhost","root","","nba");
      if ($conexion-> connect_errno) {
        echo "Fallo al conectar a MySQL: ".$conexion->connect_errno;
      }else {
      $resultado=$conexion->query("select * from equipos");
    }
    }
public function insertarEquipo($post){
        $nombre=$post["Nombre"];
  $ciudad=$post["Ciudad"];
  $conferencia=$post["Conferencia"];
  $division=$post["Division"];
  $consulta= "INSERT INTO equipo (Nombre, Ciudad, Conferencia, Division)
                          values ('$nombre', '$ciudad', '$conferencia', '$division')";
  $this->conexion->query($consulta);
}
  }

 ?>
