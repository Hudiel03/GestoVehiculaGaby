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
     h3 { 
      text-shadow: 8px 8px 5px red;
    
      color:blue;
      font-size:60px;
     }
table {
/*	background-color: violet ;*/
    color: black;
	
	align-self:"center";
    border-collapse: collapse;
    width: 70%;
    height: 120px;
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
<h1 background="red">Editar Registros </h1>
<br><br>
<table border="1" width="50%" > 
<?php
    include 'conexion.php';
    
    $sku=$_POST['rfc'];

 ?>
         
                <h3>Numero de Cita: <?php echo $sku?></h3>        
                

             <tr>
	<th width="20%">ID</th>
	<th width="20%">RFC</th>
	<th width="20%">FECHA</th>
	<th width="20%">HORA</th>
	<th width="20%">NOMBRE</th>
	<th width="20%">CORREO</th>
		<th width="20%">DIRECCION</th>
		<th width="20%">CIUDAD</th>
		<th width="20%">TRAMITE</th>
		<th width="21%">TELEFONO</th>
	
		
	</tr>


             <?php 
             $conexion= new mysqli('localhost','root','','bdwebbb');
             $consulta="SELECT * FROM datos WHERE rfc ='$sku'";
           
             $resultado=mysqli_query($conexion, $consulta);
            
             while($row=mysqli_fetch_array($resultado)){
             ?>       
                <tr>                
                <td><?php echo $row['id']?></td>
				<td><?php echo $row['rfc']?></td>
                    <td><?php echo $row['fecha']?></td>
                    <td><?php echo $row['hora']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['correo']?></td>
                    <td><?php echo $row['direccion']?></td>
                    <td><?php echo $row['ciudad']?></td>
                    <td><?php echo $row['tramite']?></td>
                    <td><?php echo $row['telefono']?></td>
                  
                    <td><br>
                      

        </td><br><br>
        </tr> 
        
        <tr>

        <a class="btn btn-primary" href="editar.php?id=<?php echo $row['id']?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true">ACTUALIZAR</i></a>
	
<a class="btn btn-primary" href="eliminar_prod.php?id=<?php echo $row['id']?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true">ELIMINAR</i></a>
        </tr><br>


    <?php } ?>   

    
</table>


</div>

<div>
  <div>
  <center>
<li><a href="index.html"style background="red";>Pagina Principal</a></li>
             </center>
             </div>
             </div>
</body>
</html>