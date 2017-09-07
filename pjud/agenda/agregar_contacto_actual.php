 <!DOCTYPE html>
<html>
<body>

<?php 
//Conectarse y seleccionar base de datos 
include("conexion.php");
$commit="commit";
// Tomar los campos provenientes del Formulario 
 //mysql_query("SET lc_time_names = 'es_CL'");

$id= $_POST['id'];
$nombre=   $_POST['nombre']; 
$telefono= $_POST['telefono']; 
$correo= $_POST['correo']; 
$contacto= $_POST['contacto'];
$direccion= $_POST['direccion'];
$alfabeto= $_POST['alfabeto'];
$observaciones= $_POST['observaciones'];
  

$query="UPDATE agenda 
         Set nombre='".$nombre."',
         telefono='".$telefono."',
         correo='".$correo."',
         contacto='".$contacto."',
         direccion='".$direccion."',
         alfabeto='".$alfabeto."',
         observaciones='".$observaciones."'
         WHERE id='".$id."' ";

//echo $query;
 
 
//$resultado=mysql_query($query, $link) or die("Error al insertar en la base de datos:". mysql_error()); 
 //revisar por que no graba y se devuelve

if (!mysql_query($query, $link)) {
     
            $commit = "rollback";
            $querylog = "Error al grabar registro: " . mysql_error($link) . "<br /><br />";
        }
    
 if($commit == "rollback")
    { 
   ?>  <script> confirm("Error en la actualización:<?php echo $querylog ?>, revise los datos e intente nuevamente, contacte al administrador del sistema");
              history.go(-1);
            </script><?php
    }
    else{
         
        ?>       <script>alert("Cambio realizado Exitosamente.");        
              window.location.href="ver_agenda.php";
             </script> 
        <?php } 
    
      
     mysql_query($commit); 
     mysql_query('SET AUTOCOMMIT=1');
     mysql_close($link); 
    
     ?> 
 
  
    </body>
</html>