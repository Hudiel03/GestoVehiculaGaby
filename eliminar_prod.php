<?php

include("function.php");
$id = $_GET['id'];
delete('datos','id',$id);
header("location:index.html");


?>
