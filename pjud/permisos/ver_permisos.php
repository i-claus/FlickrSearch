<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php  
 	include("mantenedor.php"); 
 	include("conexion.php"); 
	$result = "";  
	ini_Set("default_charset", "utf-8");
 	mysql_query("SET NAMES 'utf8'");
 
 
?>
	<br>
  <table align="center">
        <tr><td  class="texto" align="center" > <strong>BUSCAR PERMISOS</strong></td></tr>  
        <tr><td align="center"></td></tr>
    </table>

    <table align="center" CELLPADDING="3" align="center">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_buscar_permiso"  >    
         <tr>   
              <td align="left" class="texto_formulario" >Buscar por Funcionario: </td>
              <td><select class="inputselect_diario" name="busqueda">
                        <option style="font-family: mangal" value=""></option>
                        <option style="font-family: mangal" value="Ariel Jorquera">Ariel Jorquera</option>
                        <option style="font-family: mangal" value="Christian Rauld">Christian Rauld</option>
                        <option style="font-family: mangal" value="Claudia Fuentes">Claudia Fuentes</option>
                        <option style="font-family: mangal" value="Edla Miranda">Edla Miranda</option>
                        <option style="font-family: mangal" value="Francisco Meneses">Francisco Meneses</option>
                        <option style="font-family: mangal" value="Juan Pablo Gaete">Juan Pablo Gaete</option>
                        <option style="font-family: mangal" value="Leonarda Lopez">Leonarda Lopez</option>
                        <option style="font-family: mangal" value="Marisol Aravena">Marisol Aravena</option>
                        <option style="font-family: mangal" value="Maritza Cortes">Maritza Cortes</option>
                        <option style="font-family: mangal" value="Nelson Montoya">Nelson Montoya</option>
                        <option style="font-family: mangal" value="Rodrigo Valenzuela">Rodrigo Valenzuela</option>
                        <option style="font-family: mangal" value="Adriana Pizarro">Adriana Pizarro</option>
                        <option style="font-family: mangal" value="Felipe Barrera">Felipe Barrera</option>
                        <option style="font-family: mangal" value="Margarita Fuentes">Margarita Fuentes</option>
                        <option style="font-family: mangal" value="Gonzalo Garcia">Gonzalo Garcia</option>
                        <option style="font-family: mangal" value="Ailynne Esparza">Ailynne Esparza</option>
                        <option style="font-family: mangal" value="Cristian Muñoz">Cristian Muñoz</option>
                        <option style="font-family: mangal" value="Javiera Pino">Javiera Pino</option>
                        <option style="font-family: mangal" value="Vanessa Galaz">Vanessa Galaz</option>
                        <option style="font-family: mangal" value="Claudio Vega">Claudio Vega</option>
                      </select></td>
              <td><input  class="boton" type="submit" value="Buscar" name="buscar" />  </td>
         </tr>
       </form>
    </table>
    <br>
    <table align="center" CELLPADDING="3" align="center">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_buscar_permiso2"  >    
         <tr>   
            <td class="texto_formulario" >Buscar por Fecha: 
                           <input maxlength="10"  class="inputtexto" name="busqueda_fecha" type="text" size="12" value="" paceholder="hola"/> 
                      </td>
                       <td><input  class="boton" type="submit" value="Buscar" name="buscar2" />  </td>
                   </tr>
 
            
             </form>
    </table>
</html>



<?php

	if(  isset($_POST['buscar'])){
        $where=' ' ;	
        $busqueda=$_POST["busqueda"];

        if (strlen($busqueda) !== 0)  
        $where.= ' and nombre LIKE "%' . $busqueda . '%" ';	

    	$_SESSION["consulta"] ="";
        
        $_SESSION["consulta"] ='SELECT id, nombre, cargo, unidad, dia1, dia2, dia3 FROM permisos WHERE 1=1'.$where.' order by nombre  desc';

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
     
     <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_archivo"  > 
         <table width="474" align='center' class='tabla_resultado'  >
        	<tr bgcolor='#CCCCCC'>
        		<td>Nombre</td>
	    		  <td>Cargo</td>    
        		<td>Unidad</td>       
        		<td>Dia #1</td>
            <td>Dia #2</td>
            <td>Dia #3</td>
            <td>Editar</td>
            </tr>
       
      		<?php
        	while ($row = mysql_fetch_array($result)){
      		?>
        	
        	<tr> 
        		<td style='font-size:11px;text-align:left;max-width: 100px'><?php  echo $row['nombre']?></td> 
        		<td  style='font-size:11px; text-align:left; max-width: 350px'><?php  echo $row['cargo']?></td>  
        		<td style='font-size:12px'><?php echo $row['unidad']?></td>
        		<td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['dia1']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['dia2']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['dia3']))?></td> 
         		<td><a class='texto' href='actualiza_permiso.php?id=<?php echo $row['id'] ?>'><img src='img/edit.gif' title='Editar permiso' /></a> </td> 
    		   
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
        $busqueda=$_POST["busqueda_fecha"];

        if (strlen($busqueda) !== 0)  
        $where.= ' and (dia1 LIKE "%' . $busqueda . '%") OR (dia2 LIKE "%' . $busqueda . '%") OR (dia3 LIKE "%' . $busqueda . '%")'; 

      $_SESSION["consulta"] ="";
        
        $_SESSION["consulta"] ='SELECT id, nombre, cargo, unidad, dia1, dia2, dia3 FROM permisos WHERE 1=1'.$where.' order by nombre  desc';
    //echo $_SESSION["consulta"];
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
     
     <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_archivo"  > 
         <table width="474" align='center' class='tabla_resultado'  >
          <tr bgcolor='#CCCCCC'>
            <td>Nombre</td>
            <td>Cargo</td>    
            <td>Unidad</td>       
            <td>Dia #1</td>
            <td>Dia #2</td>
            <td>Dia #3</td>
            <td>Editar</td>
            </tr>
       
          <?php
          while ($row2 = mysql_fetch_array($result2)){
          ?>
          
          <tr> 
            <td style='font-size:11px;text-align:left;max-width: 100px'><?php  echo $row2['nombre']?></td> 
            <td  style='font-size:11px; text-align:left; max-width: 350px'><?php  echo $row2['cargo']?></td>  
            <td style='font-size:12px'><?php echo $row2['unidad']?></td>
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['dia1']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['dia2']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['dia3']))?></td> 
            <td><a class='texto' href='actualiza_permiso.php?id=<?php echo $row2['id'] ?>'><img src='img/edit.gif' title='Editar permiso' /></a> </td> 
           
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