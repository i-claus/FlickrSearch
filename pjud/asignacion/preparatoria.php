<!DOCTYPE html>
<?php
  include "mantenedor.php";
?>
<body>
        <br><br>
        <table align="center">
            <tr><td></td></tr>
            <tr><td  class="texto" align="center" > <strong>AGENDAR PREPARATORIA</strong></td></tr>
        </table> 
        <br>
      	<form  method="post" name="form_preparatoria" action = 'agregar_preparatoria.php'   onsubmit="return valida_preparatoria(this)" >   
               <table width="460" align="center"  CELLPADDING="3" > 
                 <tr>
                   <td width="204" class="texto_formulario" >SOLICITUD   :</td>
                   <td width="236" align="left" ><input class="inputtexto" type="text" name="solicitud" size="10" value="2015-09-08" maxlength="10"  /></td>   
                 </tr> 
                 <tr>
                   <td class="texto_formulario"  >FECHA                 :</td>
                  <td align="left" ><input class="inputtexto" type="text" name="fecha" size="10" maxlength="10" value="2015-09-08"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >HORA                   :</td>
                   <td align="left" ><input class="inputtexto" type="text" name="hora" size="5" maxlength="5"/> </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >SALA                :</td>
                    <td align="left" >
                      <select  class="inputselect_diario" name="sala" >
                        <option value="" > </option>
                        <option  style="font-family: mangal" value="1.1">  Piso 1, Sala 1</option>
                        <option  style="font-family: mangal" value="2.1">  Piso 2, Sala 1</option>
                        <option  style="font-family: mangal" value="2.2">  Piso 2, Sala 2</option>
                        <option  style="font-family: mangal" value="2.3">  Piso 2, Sala 3</option>
                        <option  style="font-family: mangal" value="3.1">  Piso 3, Sala 1</option>
                        <option  style="font-family: mangal" value="3.2">  Piso 3, Sala 2</option>
                        <option  style="font-family: mangal" value="3.3">  Piso 3, Sala 3</option>
                        <option  style="font-family: mangal" value="4.1">  Piso 4, Sala 1</option>
                        <option  style="font-family: mangal" value="4.2">  Piso 4, Sala 2</option>
                        <option  style="font-family: mangal" value="4.3">  Piso 4, Sala 3</option>
                        <option  style="font-family: mangal" value="5.1">  Piso 5, Sala 1</option>
                        <option  style="font-family: mangal" value="5.2">  Piso 5, Sala 2</option>
                        <option  style="font-family: mangal" value="5.3">  Piso 5, Sala 3</option>                        
                      </select> </td> 
                </tr>
                <tr>
                   <td></td>
                </tr>
                <tr>
                    <td class="texto_formulario">RIT               :</td>
                    <td td align="left" >   
                      <select class="inputselect_diario" name="rit_1">
                       <option value=""></option>
                       <option value="O" >O</option>
                       <option value="T" >T</option>                       
                       <option value="M" >M</option>
                       <option value="S" >S</option>                       
                       <option value="I" >I</option>
                       <option value="E" >E</option>
                       <option value="V" >V</option>
                       <option value="U" >U</option>
                       <option value="K" >K</option>                       
                      </select>
                        <input name="rit_2"   style="text-align: center; width: 40px; height:17px; vertical-align:middle" onKeypress="ValidaSoloNumeros()" maxlength="4" type="text" class="inputtexto_num"/>                    
                      <select class="inputselect_diario"   name="rit_3">
                       <option value=""></option> 
                       <option value="2018" >2018</option>                       
                       <option value="2017" >2017</option>                      
                       <option value="2016" >2016</option>                       
                       <option value="2015" >2015</option>
                       <option value="2014" >2014</option>                       
                       <option value="2013" >2013</option>
                       <option value="2012" >2012</option>                       
                       <option value="2011" >2011</option>
                       <option value="2010" >2010</option>
                      </select>
                    </td>
                </tr>
                <tr>
                   <td class="texto_formulario"  >RESPONSABLE                :</td>
                    <td align="left" >
                      <select class="inputselect_diario" name="responsable">
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
                      </select>
                    </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >DESAFUERO                :</td>
                    <td align="left" >
                      <select class="inputselect_diario" name="desafuero">
                        <option style="font-family: mangal" value=""></option>
                        <option style="font-family: mangal" value="Si">Si</option>
                        <option style="font-family: mangal" value="No">No</option> 
                      </select>
                    </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >PLURIPARTE                :</td>
                    <td align="left" >
                      <select class="inputselect_diario" name="pluriparte">
                        <option style="font-family: mangal" value=""></option>
                        <option style="font-family: mangal" value="Si">Si</option>
                        <option style="font-family: mangal" value="No">No</option> 
                      </select>
                    </td> 
                </tr>
                <tr>
                   <td class="texto_formulario"  >ACCIDENTE                :</td>
                    <td align="left" >
                      <select class="inputselect_diario" name="accidente">
                        <option style="font-family: mangal" value=""></option>
                        <option style="font-family: mangal" value="Si">Si</option>
                        <option style="font-family: mangal" value="No">No</option> 
                      </select>
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
          <br><br><br><br><br><br>
</body>
