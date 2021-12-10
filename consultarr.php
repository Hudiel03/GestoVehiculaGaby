<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
body{
  
 
  /* margin: 0 auto;*/
/*   background-color: red;*/
  background-image: url('img/call2.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
h1 { 
      text-shadow: 4px 4px 8px yellow;
      background-color: black;
      color:black;
      font-size:60px;
     }
table {
/*	background-color: violet ;*/
    color: black;
	
	align-self:"center";
    border-collapse: collapse;
    width: 80%;
}
th, td {
    text-align: left;
    padding: 4px;
	font-size:15px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color:tomato;
    color:violet;
	font-size:30px;
}
.main-wrapper{
	width:100%;
	background: transparent;;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
	
}
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
</style>
</head>

<body  style="background-image: url(assets/img/hero-carousel/gesto3.jpg)" >
<div class="main-wrapper" style="text-align:center;"  >
<h1>Editar Registros </h1>
<br><br>

<?php
	include("function.php");
?>
<table border="1" width="200%" align="center">
	<tr>
	<th width="30%">id</th>
	<th width="30%">fecha</th>
	<th width="30%">hora</th>
	<th width="30%">Nombres</th>
	<th width="30%">correo</th>
		<th width="30%">direccion</th>
		<th width="30%">ciudad</th>
		<th width="30%">tramite</th>
		<th width="41%">telefono</th>
		<th width="40%">Opcion</th>
		<th width="40%">Opcion</th>
	</tr>
<?php 
	$sql = "select * from datos";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
     	<td><?php echo $row->id;?></td>
		<td><?php echo $row->fecha;?></td>
		<td><?php echo $row->hora;?></td>
		<td><?php echo $row->nombre;?></td>
		<td><?php echo $row->correo;?></td>
		<td><?php echo $row->direccion;?></td>
		<td><?php echo $row->ciudad;?></td>
		<td><?php echo $row->telefono;?></td>
		<td><?php echo $row->tramite;?></td>

		<td>
<a class="btn btn-primary" href="editar.php?id=<?php echo $row->id; ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true">Modificar</i></a>
	</td>
	<td>
<a class="btn btn-primary" href="eliminar_prod.php?id=<?php echo $row->id; ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true">borrar</i></a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
<li><a href="index.html"style background="red";>Paguina Principal</a></li>
</body>
</html>