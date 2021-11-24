<?php
include 'head.php';

print ' 
        <h2 class="postheader">Ventas en línea de entradas a la Torre Eiffel</h2><br>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
            <tr>
              <td align="right"><strong>Elija las opciones que desee :</strong></td>
              <td colspan="2">
               
                
                 <input type="checkbox" name="opciones" value=""  /> Con Guia (5 € por persona)(mínimo 10 personas)
              
                 
               </td>
               </tr>
              <tr>
                        <td align="right"><strong>Seleccione el Tipo de Entrada :</strong></td>
                        <td colspan="2">
                          <div align="left">
                                <select name="tipo">
                                  <option value="">Billete de entrada ascensor 2ª Planta</option>
                                  <option value="">Billete de ascensor Cima</option>
                                 <option value="">Billete de escaleras 2ª Planta</option>
                                 <option value="">Billete de escaleras + ascensor Cima</option>
                                </select>
                           </div>
                          </td>
              </tr>
               <tr>
               <td>
               <div align="left">
                    	<strong>Seleccione una fecha: </strong></td>
                         <td colspan="2"><input type="date" name="fecha"> </td>
                  
              </div>
               </tr>
                <tr>
                        <td align="right"><strong>Entradas Adultos :</strong></td>
                        <td colspan="2">
                          <input type="number" name="adultos"  value="0" min="0" max="20" size="5">
                        </td>
                          
              </tr>
               <tr>
                        <td align="right"><strong>Entradas Jovenes 12-24 años :</strong></td>
                        <td colspan="2">
                          <input type="number" name="jovenes" value="0" min="0" max="20" size="5">
                        </td>
                          
              </tr>
              <tr>
                        <td align="right"><strong>Personas con Tarifa Reducida :</strong></td>
                        <td colspan="2">
                          <input type="number" name="reducida" value="0" min="0" max="20" size="5">
                        </td>
                          
              </tr>
              
             
              
              
              
             
            <tr >
              <td colspan="3"><div align="center">
              
                  <input name="calcular" type="submit"  value="Calcular"/>
           
              </td>
            </tr>
        </table>
       
        
        <div id="imagen">
        <img src="images/torreeifel.png" width="250" height="400" alt="torreeifel"/>

        </div>
    </form>
    
    <br><br>
    <table >
    <tr>
    <td class="azul"><strong>Total</strong></td>
    </tr>
    
    <tr>
    <td class="azul"><strong>Precio  Entradas</strong></td>
    <td>
    <input type="text" name="precio_entradas" value="0" size="5" />
    </td>
    
    </tr>
    
    
    </tr>
    <tr>
    <td class="azul"><strong>Precio  Guia</strong></td>
    <td>
    <input type="text" name="precio_guia" value="0" size="5" />
    </td>
    
    </tr>
    <tr>
    <td class="azul"><strong>Precio  Total (Entradas  + Guia)</strong></td>
    <td>
    <input type="text" name="precio_total" value="0" size="5" />
    </td>
    
    </tr>
     </table>
        </div>';

include 'pie.php';
