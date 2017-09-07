<!DOCTYPE html>
<?php
  include "mantenedor.php";
?>
<body>
        <br><br>
        <table align="center">
            <tr><td></td></tr>
            <tr><td  class="texto" align="center" > <strong>AGENDA TELEFÓNICA</strong></td></tr>
        </table> 
        <br>
      	<form  method="post" name="form_contacto" action = 'agregar_contacto.php'   onsubmit="return valida_contactos(this)" >   
               <table width="460" align="center"  CELLPADDING="3" > 
                 <tr>
                   <td width="204" class="texto_formulario" >Institucion o Empresa   :</td>
                   <td width="236" align="left" ><input class="inputtexto" type="text" name="nombre" size="35"  /></td>   
                 </tr> 
                 <tr>
                   <td class="texto_formulario"  >Telefono                 :</td>
                  <td align="left" ><input class="inputtexto" type="text" name="telefono" size="35" maxlength="35"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Correo                   :</td>
                   <td align="left" ><input class="inputtexto" type="text" name="correo" size="35" maxlength="35"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Contacto                   :</td>
                   <td align="left" ><input class="inputtexto" type="text" name="contacto" size="35" maxlength="35"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Direccion                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="direccion" size="35" maxlength="35" /> </td> 
                </tr>
                <tr>
                  <td class="texto_formulario"  >Alfabeto                :</td>
                  <td align="left">
                    <select class="inputselect_diario" name="alfabeto">
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
                    </select>
                </td>
                </tr>
                <tr>
                   <td class="texto_formulario"  >Observaciones                :</td>
                    <td align="left" ><textarea class="inputtexto" name="observaciones"></textarea></td> 
                </tr>
                <tr>
                    <td></td>
                 <td align="left">
                     <input  class="boton" type="submit" name="enviar" value="Guardar"   />
                 </td>   
                </tr>     
                </table>
          </form>
</body>
