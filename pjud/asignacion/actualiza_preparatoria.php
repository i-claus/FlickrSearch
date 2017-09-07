<?php  
 include("mantenedor.php");
 include("conexion.php"); 
$result = "";  
 mysql_query("SET CHARACTER SET utf8");
 mysql_query("SET NAMES utf8");


$id= $_GET['id']; 

// Hacemos el filtrado, y consulta.
$sql_select = "SELECT * FROM preparatorias WHERE id='".$id."' LIMIT 1";
  

$query = mysql_query($sql_select,$link);
$row = mysql_fetch_array($query);
 //Se separa el RIT para hacerlo calzar con la combo box.

 

?>
    <br>
    <br><table align="center">
         <tr><td  class="texto" align="center" > <strong>EDITAR PREPARATORIA</strong></td></tr>  
    </table>
    <br>

    <form  method="post" name="form_preparatoria" action = 'agregar_preparatoria_actual.php'   onsubmit="return valida_preparatoria(this)" >  
    <input type="hidden" name="id" size="35" value="<?php  echo $id; ?>" /> 
               <table width="460" align="center"  CELLPADDING="3" > 
                 <tr>
                   <td width="204" class="texto_formulario" >SOLICITUD   :</td>
                   <td width="236" align="left" ><input class="inputtexto" type="text" name="solicitud" size="10" value="<?php echo $row['solicitud']; ?>" maxlength="10"  /></td>   
                 </tr> 
                 <tr>
                   <td class="texto_formulario"  >FECHA                 :</td>
                  <td align="left" ><input class="inputtexto" type="text" name="fecha" size="10" maxlength="10" value="<?php echo $row['fecha']; ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >HORA                   :</td>
                   <td align="left" ><input class="inputtexto" type="text" name="hora" size="5" maxlength="5" value="<?php echo $row['hora']; ?>"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >SALA                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="sala" maxlength="15" value="<?php echo $row['sala']; ?>"></td> 
                </tr>
                <tr>
                   <td></td>
                </tr>
                <tr>
                    <td class="texto_formulario">RIT               :</td>
                    <td td align="left" ><input name="rit" maxlength="10" type="text" class="inputtexto" value="<?php echo $row['rit']; ?>"></td>
                </tr>
                <tr>
                   <td class="texto_formulario"  >RESPONSABLE                :</td>
                    <td align="left" ><input name="responsable"  maxlength="20" type="text" class="inputtexto" value="<?php echo $row['responsable']; ?>"></td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >DESAFUERO                :</td>
                    <td align="left" ><input name="desafuero"  maxlength="5" type="text" class="inputtexto" value="<?php echo $row['desafuero']; ?>">
                    </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >PLURIPARTE                :</td>
                    <td align="left" ><input name="pluriparte"  maxlength="5" type="text" class="inputtexto" value="<?php echo $row['pluriparte']; ?>">
                    </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >ACCIDENTE                :</td>
                    <td align="left" ><input name="accidente"  maxlength="5" type="text" class="inputtexto" value="<?php echo $row['accidente']; ?>">
                    </td>
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