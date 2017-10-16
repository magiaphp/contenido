<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Autor"); ?></th> 
<th><?php _t("Tipo"); ?></th> 
<th><?php _t("Titulo"); ?></th> 
<th><?php _t("Contenido"); ?></th> 
<th><?php _t("Url"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "contenido", $_usuarios_grupo)){
             //   include "./contenido/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($contenido = mysql_fetch_array($sql)) {
            include "./contenido/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "contenido", $_usuarios_grupo)){
                    include "./contenido/vista/tr.php";
                   // include "./contenido/vista/tr_editar.php";
                }else{
                    include "./contenido/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "contenido", $_usuarios_grupo)){
             //   include "./contenido/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


