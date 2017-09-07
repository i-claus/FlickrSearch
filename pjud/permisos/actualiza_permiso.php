<?php  
 include("mantenedor.php");
 include("conexion.php"); 
$result = "";  
 mysql_query("SET CHARACTER SET utf8");
 mysql_query("SET NAMES utf8");


$id= $_GET['id']; 

// Hacemos el filtrado, y consulta.
$sql_select = "SELECT * FROM permisos WHERE id='".$id."' LIMIT 1";
  

$query = mysql_query($sql_select,$link);
$row = mysql_fetch_array($query);
 //Se separa el RIT para hacerlo calzar con la combo box.

 

?>
    <br><br>
    <table align="center">
         <tr><td  class="texto" align="center" > <strong>EDITAR PERMISO</strong></td></tr>  
    </table>
    <br>

    <form  method="post" name="form_permiso" action = 'agregar_permiso_actual.php'   onsubmit="return valida_permiso(this)" >  
    <input type="hidden" name="id" size="35" value="<?php  echo $id; ?>" /> 
               <table width="460" align="center"  CELLPADDING="3" > 
                 <tr>
                   <td width="204" class="texto_formulario" >Nombre  :</td>
                   <td width="236" align="left" ><input class="inputtexto" type="text" name="nombre" size="35" value="<?php  echo $row["nombre"] ?>" /></td>   
                 </tr> 
                 <tr>
                   <td class="texto_formulario"  >Cargo                 :</td>
                  <td align="left" ><input class="inputtexto" type="text" name="cargo" size="35" maxlength="35" value="<?php  echo $row["cargo"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Unidad                   :</td>
                   <td align="left" ><input class="inputtexto" type="text" name="unidad" size="35" maxlength="35" value="<?php  echo $row["unidad"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Dia #1                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="dia1" size="10" maxlength="10" value="<?php  echo $row["dia1"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Dia #2                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="dia2" size="10" maxlength="10" value="<?php  echo $row["dia2"] ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Dia #3               :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="dia3" size="10" maxlength="10" value="<?php  echo $row["dia3"] ?>"/> </td> 
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