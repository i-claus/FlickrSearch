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
        <tr><td  class="texto" align="center" > <strong>BUSCAR EN AGENDA</strong></td></tr>  
        <tr><td align="center"></td></tr>
    </table>

    <table  CELLPADDING="3" align="center"> 
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_buscar_agenda"  >    
         <tr>   
               <td class="texto_formulario" >Buscar por: 
                   <input maxlength="35"  class="inputtexto" name="busqueda" type="text" size="35" value="" paceholder="hola"/> 
          		</td>
               <td><input  class="boton" type="submit" value="Buscar" name="buscar" />  </td>
           </tr>
        </form> 
         </table>  
    <br>
    <table align="center">
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_buscar_agenda2"  >    
         <tr>   
              <td align="left" class="texto_formulario" >Buscar por Alfabeto: </td>
              <td><select class="inputselect_diario" name="busqueda2">
                  <option value=""></option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                  <option value="F">F</option>
                  <option value="G">G</option>
                  <option value="H">H</option>
                  <option value="I">I</option>
                  <option value="J">J</option>
                  <option value="K">K</option>
                  <option value="L">L</option>
                  <option value="M">M</option>
                  <option value="N">N</option>
                  <option value="Ñ">Ñ</option>
                  <option value="O">O</option>
                  <option value="P">P</option>
                  <option value="Q">Q</option>
                  <option value="R">R</option>
                  <option value="S">S</option>
                  <option value="T">T</option>
                  <option value="U">U</option>
                  <option value="V">V</option>
                  <option value="W">W</option>
                  <option value="X">X</option>
                  <option value="Y">Y</option>
                  <option value="Z">Z</option>
                </select> </td>
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
        
        $_SESSION["consulta"] ='SELECT id, nombre, telefono, correo, contacto, direccion, observaciones FROM agenda WHERE 1=1'.$where.' order by nombre  desc';
  
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
     </br><a href='ficheroContacto.php' ><img src='img/excel.png' /> Exportar a Excel (Todos los campos)</a> <br></br>

     <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_archivo"  > 
         <table width="474" align='center' class='tabla_resultado'  >
        	<tr bgcolor='#CCCCCC'>
        		<td>Nombre</td>
	    		  <td>Telefono</td>    
        		<td>Correo</td>  
            <td>Contacto</td>     
        		<td>Direccion</td>
            <td>Observaciones</td>
            <td>Editar</td>
            </tr>
       
      		<?php
        	while ($row = mysql_fetch_array($result)){
      		?>
        	
        	<tr> 
        		<td style='font-size:11px;text-align:left;max-width: 100px'><?php  echo $row['nombre']?></td> 
        		<td  style='font-size:11px; text-align:left; max-width: 350px'><?php  echo $row['telefono']?></td>  
        		<td style='font-size:12px'><?php echo $row['correo']?></td>
        		<td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['contacto']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['direccion']))?></td>
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row['observaciones']))?></td>
         		<td><a class='texto' href='actualiza_contacto.php?id=<?php echo $row['id'] ?>'><img src='img/edit.gif' title='Editar contacto' /></a> </td> 
    		   
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
        $busqueda2=$_POST["busqueda2"];

        if (strlen($busqueda2) !== 0)  
        $where.= ' and alfabeto = "' . $busqueda2 . '" '; 

      $_SESSION["consulta"] ="";
        
        $_SESSION["consulta"] ='SELECT id, nombre, telefono, correo, contacto, direccion, observaciones FROM agenda WHERE 1=1'.$where.' order by nombre  desc';
  
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
     </br><a href='ficheroContacto.php' ><img src='img/excel.png' /> Exportar a Excel (Todos los campos)</a> <br></br>

     <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>" name="form_archivo"  > 
         <table width="474" align='center' class='tabla_resultado'  >
          <tr bgcolor='#CCCCCC'>
            <td>Nombre</td>
            <td>Telefono</td>    
            <td>Correo</td> 
            <td>Contacto</td>      
            <td>Direccion</td>
            <td>Observaciones</td>
            <td>Editar</td>
            </tr>
       
          <?php
          while ($row2 = mysql_fetch_array($result2)){
          ?>
          
          <tr> 
            <td style='font-size:11px;text-align:left;max-width: 100px'><?php  echo $row2['nombre']?></td> 
            <td style='font-size:11px; text-align:left; max-width: 350px'><?php  echo $row2['telefono']?></td>  
            <td style='font-size:12px'><?php echo $row2['correo']?></td>
            <td style='font-size:12px'><?php echo $row2['contacto']?></td>
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['direccion']))?></td> 
            <td style='font-size:11px;text-align:left; max-width: 180px'><?php echo ucwords(strtolower($row2['observaciones']))?></td> 
            <td><a class='texto' href='actualiza_contacto.php?id=<?php echo $row2['id'] ?>'><img src='img/edit.gif' title='Editar contacto' /></a> </td> 
           
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