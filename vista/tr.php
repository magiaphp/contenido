<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, contenido_campos_a_mostrar())) {
                                echo "<td>$contenido[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=contenido&c=ver&contenido_id='.$contenido_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=contenido&c=editar&contenido_id='.$contenido_id.'>'._tr("Editar").'</a>  
                      
                </td>';  