<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         
    </head>
<body>

<?php 
//Conectarse y seleccionar base de datos 
include("conexion.php");

// Tomar los campos provenientes del Formulario 
//$id = $_POST['id']; 
//echo $id;
$nombre=  htmlentities(trim($_POST['nombre'])) ; 
$cargo = htmlentities(trim($_POST['cargo'])); 
$unidad = htmlentities(trim($_POST['unidad'])) ;
$dia1 = htmlentities(trim($_POST['dia1'])) ;
$dia2 = htmlentities(trim($_POST['dia2'])) ;
$dia3 = htmlentities(trim($_POST['dia3'])) ;

$query="INSERT INTO permisos(id,nombre,cargo,unidad, dia1, dia2, dia3) ";
$query.= "VALUES ('','".$nombre."','".$cargo."','".$unidad."','".$dia1."','".$dia2."','".$dia3."')";

$revisa_usuario= mysql_query("select 1 from permisos where nombre='$nombre'"); 

if((mysql_num_rows($revisa_usuario)>0)) 
    { 
    ?>
    <script> confirm("El código de permiso ya existe en el sistema");
    history.go(-1);</script>
    <?php
    } 
else 
    {
    	$resultado=mysql_query($query, $link); //or die("Error al insertar en la base de datos:". mysql_error()); 
		if (!$resultado) 
		    {
		    ?>
		         <script>	
		        alert ('Ingreso no válida: ,'<?php echo mysql_error(); mysql_close($link);?> );  
		         window.location.href="permiso.php";
		         </script> 
		    <?php 	
		    } else {         
		    ?>
		        <script>
		         alert("Permiso Ingresado Exitosamente");
		        <?php  mysql_close($link);?>
		         window.location.href="permiso.php";
		        </script> 
		    <?php 
		            }
		}     
?>     