<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Registros</title>
<link type="text/css" href="bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<style>
  a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
	body{
  
 
  /* margin: 0 auto;*/
/*   background-color: red;*/
  background-image: url('img/call2.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
button {
  width:10%;
      background-color:transparent;
      border-color:red;
      color:white;
      }
table {
    border-collapse: collapse;
    width: 80%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f5f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:100%;
	
	background:transparent;
/*border:1px solid #292929;*/
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
    h1 { 
      text-shadow: 4px 4px 8px red;
      background-color: black;
      color:black;
      
     }


</style>
</head>

<body  style="background-image: url(assets/img/auto2.jpg">
<div class="main-wrapper" style="text-align:center;">
<h1>Editar Registros </h1>
<br><br>

<?php 
include("function.php");
$id = $_GET['id'];
select_id('datos','id',$id);
?>

<section id="contact" class="section-bg">
<div class="container" data-aos="fade-up" >

<div class="form">
         

<form action="" method="post">

     <div class="row" style="text-align:center;">
     <div class="form-group col-md-6" style="text-align:center;">
     <input type="text" value="<?php echo $row->id;?>"class="form-control" name="id">
     </div>
     <div class="form-group col-md-6" style="text-align:center;">
     <input type="text" value="<?php echo $row->rfc;?>"class="form-control" name="rfc">
     </div>
    </div>

              <div class="row">
              <div class="form-group col-md-6">
                <input type="date" value="<?php echo $row->fecha;?>" name="fecha" class="form-control" id="fecha" placeholder="fecha" required>
              </div>

              <div class="form-group col-md-6">
                <input type="time" value="<?php echo $row->hora;?>" class="form-control" name="hora" id="hora" placeholder="hora" required>
              </div>
            </div>
			<div class="row">
              <div class="form-group col-md-6">
                <input type="text" value="<?php echo $row->nombre;?>" name="nombre" class="form-control" id="nombre" placeholder="nombre" required>
              </div>

              <div class="form-group col-md-6">
                <input type="text" value="<?php echo $row->correo;?>" class="form-control" name="correo" id="correo" placeholder="correo" required>
              </div>
            </div>
			<div class="row">
              <div class="form-group col-md-6">
                <input type="text" value="<?php echo $row->direccion;?>" name="direccion" class="form-control" id="direccion" placeholder="direccion" required>
              </div>

              <div class="form-group col-md-6">
                <input type="text" value="<?php echo $row->ciudad;?>" class="form-control" name="ciudad" id="ciudad" placeholder="ciuadad" required>
              </div>
            </div> 
	      
			         <div class="row">
              <div class="form-group col-md-6">
              <input type="text" value="<?php echo $row->telefono;?>" name="telefono" class="form-control" id="telefono" placeholder="telefono" required>
              </div>

              <div class="form-group col-md-6">
              <input type="text" value="<?php echo $row->tramite;?>" class="form-control" name="tramite" id="tramite" placeholder="tramitea" required>
              </div>
              </div>
              <div class="text-center">
         <button  type="submit" name="enviar" value="enviar">Actualizar</button>
      
              </div>

          <!--    <div class="row">
              <div class="form-group col-md-6">
           	<input class="text-center" type="submit" name="submit" value="enviar" type="color" value="#ff0000">
             </div>
              </div>-->
    </form>
    </div>
    </section>
      

<?php
 
		
	if(isset($_POST['enviar'])){
	
		$field = array("id"=>$_POST['id'],"rfc"=>$_POST['rfc'],"fecha"=>$_POST['fecha'],"hora"=>$_POST['hora'], "nombre"=>$_POST['nombre'],"correo"=>$_POST['correo'],
		"direccion"=>$_POST['direccion'],"ciudad"=>$_POST['ciudad'],"telefono"=>$_POST['telefono'],"tramite"=>$_POST['tramite']);
		$tbl = "datos";
		edit($tbl,$field,'id',$id);
  //  <a href="consultarr.php" class="button">Modificar</a>
	//	header("location:consultarr.php");
 // header("Status: 301 Moved Permanently");
  header("Location:citas.html");
  echo"<script language='javascript'>window.location='citas.html'</script>;";
  exit();
  
	}
?>
 
</div>
<!--<li><a href="consultarr.php">Paguina Principal</a></li>-->
</body>
</html>