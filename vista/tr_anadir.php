<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="contenido">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="contenido_id_autor" value="" placeholder="<?php _t("Id_autor"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_tipo" value="" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_titulo" value="" placeholder="<?php _t("Titulo"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_contenido" value="" placeholder="<?php _t("Contenido"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_url" value="" placeholder="<?php _t("Url"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 