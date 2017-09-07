<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php  
 	include("mantenedor.php"); 
 	include("conexion.php"); 
	$result = "";  
	ini_Set("default_charset", "utf-8");
 	mysql_query("SET NAMES 'utf8'");
 
 
?>
  <br><br>
	<table align="center">
        <tr><td  class="texto" align="center" > <strong>BUSCAR PREPARATORIA</strong></td></tr>  
        <tr><td align="center"></td></tr>
    </table>

    <table  CELLPADDING="3" align="center"> 
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_buscar_preparatoria"  > 
         <tr>   
             <td class="texto_formulario" >Buscar por Fecha de Solicitud: 
                 <input maxlength="10"  class="inputtexto" name="busqueda_solicitud" type="text" size="10" value="2015-03" paceholder="hola"/> 
        		</td>
             <td><input  class="boton" type="submit" value="Buscar" name="buscar1" />  </td>
         </tr>
       </form>
       
       <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_buscar_preparatoria2"  >    
         <tr>   
            <td class="texto_formulario" >Buscar por Fecha: 
                           <input maxlength="10"  class="inputtexto" name="busqueda_fecha" type="text" size="10" value="2015-03" paceholder="hola"/> 
                      </td>
                       <td><input  class="boton" type="submit" value="Buscar" name="buscar2" />  </td>
                   </tr>
 
            
             </form> 
      
          
    </table>  
</html>



<?php

	if(  isset($_POST['buscar1'])){
        $where=' ' ;	
        $busqueda=$_POST["busqueda_solicitud"];

        if (strlen($busqueda) !== 0)  
        $where.= ' and solicitud LIKE "%' . $busqueda . '%" ';	

    	$_SESSION["consulta"] ="";
        
        $_SESSION["consulta"] ='SELECT id, solicitud, fecha, hora, sala, rit, responsable, desafuero, pluriparte, accidente FROM preparatorias WHERE 1=1'.$where.' order by solicitud  desc';
  
         $result=mysql_query($_SESSION["consulta"]);
                       
                if($result === FALSE) {
                    die(mysql_error()); 
                    echo $_SESSION["consulta"];
                }
?>

<!-- Aqui muestras el resultado del query SQL
         //ahora vamos construyendo la tabla, la primera fila siendo mas preciso esta es posible
  construirla toda en pocas lineas, lo coloco as� para una mejor comprensi�n
  -->

 </br>
 <div align='center'>
     </br><a href='fichaPreparatoria.php' ><img src='img/excel.png' /> Exportar a Excel (Todos los campos)</a> <br></br>

     <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_archivo"  > 
         <table width="474" align='center' class='tabla_resultado'  >
        	<tr bgcolor='#CCCCCC'>
        		<td>Solicitud</td>
	    		<td>Fecha</td>    
        		<td>Hora</td>       
        		<td>Sala</td>
            <td>Rit</td>
            <td>Responsable</td>
            <td>Desafuero</td>
            <td>Pluriparte</td>
            <td>Accidente</td>
            <td>EDITAR</td>
            </tr>
       
      		<?php
        	while ($row = mysql_fetch_array($result)){
      		?>
        	
        	<tr> 
        		<td style='font-size:11px;text-align:left;max-width: 100px'><?php  echo $row['solicitud']?></td> 
        		<td  style='font-size:11px; text-align:left; max-width: 350px'><?php  echo $row['fecha']?></td>  
        		<td style='font-size:12px'><?php echo $row['hora']?></td>
        		<td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['sala']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['rit']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['responsable']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['desafuero']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['pluriparte']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['accidente']))?></td> 
         		<td><a class='texto' href='actualiza_preparatoria.php?id=<?php echo $row['id'] ?>'><img src='img/edit.gif' title='Editar Preparatoria' /></a> </td> 
    		   
    		<?php } ?>
        	</tr> 
		       
     
       	</table> 
     </form>
       		<br></br> 
 </div> 
   
<?php 
   }
?>







<?php

  if(  isset($_POST['buscar2'])){
        $where=' ' ;  
        $busqueda2=$_POST["busqueda_fecha"];

        if (strlen($busqueda2) !== 0)  
        $where.= ' and fecha = "' . $busqueda2 . '" ';  

      $_SESSION["consulta"] ="";
        
        $_SESSION["consulta"] ='SELECT id, solicitud, fecha, hora, sala, rit, responsable, desafuero, pluriparte, accidente FROM preparatorias WHERE 1=1'.$where.' order by solicitud  desc';
  
         $result2=mysql_query($_SESSION["consulta"]);
                       
                if($result2 === FALSE) {
                    die(mysql_error()); 
                    echo $_SESSION["consulta"];
                }
?>

<!-- Aqui muestras el resultado del query SQL
         //ahora vamos construyendo la tabla, la primera fila siendo mas preciso esta es posible
  construirla toda en pocas lineas, lo coloco as� para una mejor comprensi�n
  -->

 </br>
 <div align='center'>
     </br><a href='#' ><img src='img/excel.png' /> Exportar a Excel (Todos los campos)</a> <br></br>

     <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_archivo"  > 
         <table width="474" align='center' class='tabla_resultado'  >
          <tr bgcolor='#CCCCCC'>
            <td>Solicitud</td>
          <td>Fecha</td>    
            <td>Hora</td>       
            <td>Sala</td>
            <td>Rit</td>
            <td>Responsable</td>
            <td>Desafuero</td>
            <td>Pluriparte</td>
            <td>Accidente</td>
            <td>EDITAR</td>
            </tr>
       
          <?php
          while ($row2 = mysql_fetch_array($result2)){
          ?>
          
          <tr> 
            <td style='font-size:11px;text-align:left;max-width: 100px'><?php  echo $row2['solicitud']?></td> 
            <td  style='font-size:11px; text-align:left; max-width: 350px'><?php  echo $row2['fecha']?></td>  
            <td style='font-size:12px'><?php echo $row2['hora']?></td>
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['sala']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['rit']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['responsable']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['desafuero']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['pluriparte']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['accidente']))?></td> 
            <td><a class='texto' href='actualiza_preparatoria.php?id=<?php echo $row2['id'] ?>'><img src='img/edit.gif' title='Editar Preparatoria' /></a> </td> 
           
        <?php } ?>
          </tr> 
           
     
        </table> 
     </form>
          <br></br> 
 </div> 
   
<?php 
   }
?>
 
</body>
</html>