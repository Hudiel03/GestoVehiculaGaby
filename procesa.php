<?php

$fecha = $_POST  ['fecha' ];
$rfc = $_POST  ['rfc' ];
$hora = $_POST  ['hora' ];
$nombre = $_POST  ['nombre' ];
$correo = $_POST  ['correo' ];
$direccion = $_POST  ['direccion' ];
$ciudad = $_POST  ['ciudad' ];
$telefono = $_POST  ['telefono' ];
$tramite = $_POST  ['tramite' ];
 
//echo "fecha:".$fecha."hora:" .$hora. "nombre:" .$nombre. "correo:" .$correo. "Direccion:" .$direccion. "Ciudad:" .$ciudad. "telefono:" .$telefono. "Tramite:" .$tramite;
 
$conexion= new mysqli('localhost','root','','bdwebbb');
if($conexion->connect_error){
 die("Error de conexion".$conexion->connect_error);

} else{
  $sql = "INSERT INTO datos (fecha,rfc,hora,nombre,correo,direccion,ciudad,telefono,tramite) VALUES('".$fecha."','".$rfc."','".$hora."','".$nombre."','".$correo."','".$direccion."','".$ciudad."','".$telefono."','".$tramite."');";
  if ($conexion->query($sql)) {
    echo "Su cita FuE Reservada ";
  }
}
?>  