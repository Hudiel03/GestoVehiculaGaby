<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>
<body>


<?php

$conexion= new mysqli('localhost','root','','bdwebbb');
$sql = "SELECT * FROM datos";
$datos= $conexion->query($sql);
if ($datos-> num_rows > 0){
    echo "<table border='1'>";
 while($c=$datos->fetch_assoc()){
    
     echo "<tr>";
     echo "<td>";
     echo $c["id"];
     echo "</td>";
     echo "<td>";
     echo $c["fecha"];
     echo "</td>";
     echo "<td>";
     echo $c["hora"];
     echo "</td>";
     echo "<td>";
     echo $c["nombre"];
     echo "</td>";
     echo "<td>";
     echo $c["correo"];
     echo "</td>";
     echo "<td>";
     echo $c["direccion"];
     echo "</td>";
     echo "<td>";
     echo $c["ciudad"];
     echo "</td>";
     echo "<td>";
     echo $c["telefono"];
     echo "</td>";
     echo "<td>";
     echo $c["tramite"];
     echo "</td>";



     echo "<td>";

     echo  "<a href='editar.php'>Editar</a>";
     echo "</td>";

     echo "</tr>";
     
//    echo "Rfc:".$c["rfc"]."Nombre:".$c["nombre"]."Edad:".$c["edad"]."Sexo:".$c["sexo"];

 }
echo "</table>";
}else {
   echo "no existen registros" .$conexion_error;
}
echo "<a href='index.html'>Regresar</a>";
//tilizamos html pero cuando estamos en php
?>

<a href="index.html">REGRESAR</a>
</body>
</html>
