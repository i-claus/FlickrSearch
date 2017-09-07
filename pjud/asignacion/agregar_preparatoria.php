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

$solicitud=  htmlentities(trim($_POST['solicitud'])) ; 
$fecha = htmlentities(trim($_POST['fecha'])); 
$hora = htmlentities(trim($_POST['hora'])) ;
$sala = htmlentities(trim($_POST['sala'])) ;
$rit=  $_POST['rit_1']."-".$_POST['rit_2']."-".$_POST['rit_3'];
$responsable = htmlentities(trim($_POST['responsable'])) ;
$desafuero = htmlentities(trim($_POST['desafuero'])) ;
$pluriparte = htmlentities(trim($_POST['pluriparte'])) ;
$accidente = htmlentities(trim($_POST['accidente'])) ;


$query="INSERT INTO preparatorias(id, solicitud,fecha, hora, sala, rit, responsable, desafuero, pluriparte, accidente) ";
$query.= "VALUES ('','".$solicitud."','".$fecha."','".$hora."','".$sala."','".$rit."','".$responsable."','".$desafuero."','".$pluriparte."','".$accidente."')";

//$id= $_GET['id'];
$revisa_prep= mysql_query("select 1 from preparatorias where solicitud='$solicitud' and fecha ='$fecha' and sala ='$sala'"); 

if((mysql_num_rows($revisa_prep)>0)) 
    { 
    ?>
    <script> confirm("La preparatoria ya existe en el sistema");
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
		         window.location.href="preparatoria.php";
		         </script> 
		    <?php 	
		    } else {         
		    ?>
		        <script>
		         alert("Preparatoria Ingresada Exitosamente");
		        <?php  mysql_close($link);?>
		         window.location.href="preparatoria.php";
		        </script> 
		    <?php 
		            }
		}     
?>     