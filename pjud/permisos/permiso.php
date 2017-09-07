<!DOCTYPE html>
<?php
  include "mantenedor.php";
?>
<body>
        <br>
        <table align="center">
            <tr><td></td></tr>
            <tr><td  class="texto" align="center" > <strong>PERMISO 347</strong></td></tr>
        </table> 
        <br>
      	<form  method="post" name="form_permiso" action = 'agregar_permiso.php'   onsubmit="return valida_permiso(this)" >   
               <table width="460" align="center"  CELLPADDING="3" > 
                 <tr>
                   <td width="204" class="texto_formulario" >Nombre   :</td>
                   <td width="236" align="left" >
                    <select class="inputselect_diario" name="nombre">
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
                 </tr> 
                 <tr>
                   <td class="texto_formulario"  >Cargo                 :</td>
                  <td align="left" ><input class="inputtexto" type="text" name="cargo" size="35" maxlength="35"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >Unidad                   :</td>
                   <td align="left" >
                    <select class="inputselect_diario" name="unidad">
                      <option value="Sala">Sala</option>
                      <option value="Servicio">Servicio</option>
                      <option value="Causa">Causa</option> 
                    </select>
                    </td> 
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                    <td class="texto_formulario"  >Dia #1                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="dia1" size="10" maxlength="10" /> </td> 
                </tr>
                <tr>
                    <td class="texto_formulario"  >Dia #2                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="dia2" size="10" maxlength="10" /> </td>
                </tr>
                <tr>
                    <td class="texto_formulario"  >Dia #3                :</td>
                    <td align="left" ><input class="inputtexto" type="text" name="dia3" size="10" maxlength="10" /> </td>
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
