<?php
session_start();
include 'head.php';

if(isset($_REQUEST['listar']))//si pulsamos el boton listar
{
  foreach($_SESSION['incidencias']as $clave=>$vector)
  //recorrer el array y volverle a recorrer con otro foreach eligiendo el tipo seleccionado
  {
    foreach ($vector as $indice=>$valor){
      if($valor=="Basuras"){
      echo '<table> <tbody>';
        echo '<td>'.$indice.'</td>';
        echo '<td>'.$valor.'</td>';
    echo '<tbody> </table>';   
      }              
     }
  }
  
}                   
 print' 
         <strong>SELECCIONA EL TIPO DE INCIDENCIA A LISTAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="listar.php" method="post">
            <table align="center" class="content-layout">
              										  </td></tr>
              <tr>
                <td align="right"><strong>Tipo :</strong></td><td>
                 <div align="left">
                    <select name="tipo">
                     <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                    </select>
                </div>
               </td>
              </tr>
              <tr >
              <td colspan="2"><div align="center"><strong>
                <input name="listar" type="submit" id="listar" value="Listar"/>
                </strong>
                </div>
              </td>
            </tr>
              
        </table>
    </form>
        </div>';
 include 'pie.php';

