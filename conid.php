<?php
    include 'conexion.php';
    


    $sku=$_POST['id'];

 ?>
        <center>  
                <h3>Movimientos Producto: <?php echo $sku?></h3>        
                <table border="1" width="100%" align="center">  

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
		<
	</tr>


             <?php 
             $conexion= new mysqli('localhost','root','','bdwebbb');
             $consulta="SELECT * FROM datos WHERE id='$sku'";
           
             $resultado=mysqli_query($conexion, $consulta);
            
             while($row=mysqli_fetch_array($resultado)){
             ?>       
                <tr>                
                <td><?php echo $row['id']?></td>
                    <td><?php echo $row['fecha']?></td>
                    <td><?php echo $row['hora']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['correo']?></td>
                    <td><?php echo $row['direccion']?></td>
                    <td><?php echo $row['ciudad']?></td>
                    <td><?php echo $row['telefono']?></td>
                    <td><?php echo $row['tramite']?></td>
                    <td>
<a class="btn btn-primary" href="editar.php?id=<?php echo $row['fecha'] ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true">Modificar</i></a>
	</td>
	<td>
<a class="btn btn-primary" href="eliminar_prod.php?id=<?php echo $row->id; ?>">
<i class="fa fa-pencil fa-lg" aria-hidden="true">borrar</i></a>
        </td>
                 
        

                 

               </tr>   
    <?php

        }

    ?>      
             </table>
        </center> 


    <?php 


?>