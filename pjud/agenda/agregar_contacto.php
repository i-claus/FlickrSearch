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
$telefono = htmlentities(trim($_POST['telefono'])); 
$correo = htmlentities(trim($_POST['correo'])) ;
$contacto = htmlentities(trim($_POST['contacto'])) ;
$direccion = htmlentities(trim($_POST['direccion'])) ;
$alfabeto = htmlentities(trim($_POST['alfabeto'])) ;
$observaciones = htmlentities(trim($_POST['observaciones'])) ;

$query="INSERT INTO agenda(id,nombre,telefono,correo,contacto, direccion, alfabeto,observaciones) ";
$query.= "VALUES ('','".$nombre."','".$telefono."','".$correo."','".$contacto."','".$direccion."','".$alfabeto."','".$observaciones."')";

$revisa_usuario= mysql_query("select 1 from agenda where nombre='$nombre'"); 

if((mysql_num_rows($revisa_usuario)>0)) 
    { 
    ?>
    <script> confirm("El código de institución ya existe en el sistema");
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
		         window.location.href="contacto.php";
		         </script> 
		    <?php 	
		    } else {         
		    ?>
		        <script>
		         alert("Institución Ingresada Exitosamente");
		        <?php  mysql_close($link);?>
		         window.location.href="contacto.php";
		        </script> 
		    <?php 
		            }
		}     
?>     