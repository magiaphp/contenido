<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("contenido"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=contenido&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php $ganchos=array(); contenido_thead($ganchos); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "contenido", $_usuarios_grupo)){
             //   include "./contenido/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($contenido = mysql_fetch_array($sql)) {

                    include "./contenido/reg/reg.php";

                    $campo_disponibles = contenido_campos_disponibles();

                    echo "<tr>";
                    include "./contenido/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "contenido", $_usuarios_grupo)){
                            //   include "./contenido/vista/tr_anadir.php";

                           }
                  ?>
                   <?php contenido_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>