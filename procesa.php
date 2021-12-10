<?php

$fecha = $_POST  ['fecha' ];
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
  $sql = "INSERT INTO datos (fecha,hora,nombre,correo,direccion,ciudad,telefono,tramite) VALUES('".$fecha."','".$hora."','".$nombre."','".$correo."','".$direccion."','".$ciudad."','".$telefono."','".$tramite."');";
  if ($conexion->query($sql)) {
    echo "Nuevo registro se inserto  ";
  }
}
?>