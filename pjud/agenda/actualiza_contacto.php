<?php  
 include("mantenedor.php");
 include("conexion.php"); 
$result = "";  
 mysql_query("SET CHARACTER SET utf8");
 mysql_query("SET NAMES utf8");


$id= $_GET['id']; 

// Hacemos el filtrado, y consulta.
$sql_select = "SELECT * FROM agenda WHERE id='".$id."' LIMIT 1";
  

$query = mysql_query($sql_select,$link);
$row = mysql_fetch_array($query);
 //Se separa el RIT para hacerlo calzar con la combo box.

 

?>
    <br><br>
    <table align="center">
         <tr><td  class="texto" align="center" > <strong>EDITAR CONTACTO</strong></td></tr>  
    </table>
    <br>

    <form  method="post" name="form_contacto" action = 'agregar_contacto_actual.php'   onsubmit="return valida_contactos(this)" >  
    <input type="hidden" name="id" size="35" value="<?php  echo $id; ?>" /> 
               <table width="460" align="center"  CELLPADDING="3" > 
                 <tr>
                   <td width="204" class="texto_formulario" >Institucion o Empresa   :</td>
                   <td width="236" align="left" ><input class="inputtexto" type="text" name="nombre" size="35" value="<?php  echo $row["nombre"] ?>" /></td>   
                 </tr> 
                 <tr>
                   <td class="texto_formulario"  >Telefono                 :</td>
                  <td align="left" ><input class="inputtexto" type="text" name="telefono" size="35" maxlength="35" value="<?php  echo $row["telefono"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Correo                   :</td>
                   <td align="left" ><input class="inputtexto" type="text" name="correo" size="35" maxlength="35" value="<?php  echo $row["correo"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Contacto                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="contacto" size="35" maxlength="35" value="<?php  echo $row["contacto"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Direccion                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="direccion" size="35" maxlength="35" value="<?php  echo $row["direccion"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Alfabeto                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="alfabeto" size="4" maxlength="4" value="<?php  echo $row["alfabeto"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Observaciones                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="observaciones" size="4" maxlength="4" value="<?php  echo $row["observaciones"] ?>"/> </td> 
                </tr>
                <tr>
                    <td></td>
                 <td align="left">
                     <input  class="boton" type="submit" name="enviar" value="Guardar"   />
                 </td>   
                </tr>     
                </table>
          </form>
<?php    
mysql_close($link);?>
 
</body>
</html>