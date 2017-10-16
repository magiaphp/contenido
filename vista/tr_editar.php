<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "contenido", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=contenido&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="contenido">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="contenido_id" value="<?php echo $contenido_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="contenido_id_autor" value="<?php echo $contenido_id_autor; ?>" placeholder="<?php _t("Id_autor"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_tipo" value="<?php echo $contenido_tipo; ?>" placeholder="<?php _t("Tipo"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_titulo" value="<?php echo $contenido_titulo; ?>" placeholder="<?php _t("Titulo"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_contenido" value="<?php echo $contenido_contenido; ?>" placeholder="<?php _t("Contenido"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_url" value="<?php echo $contenido_url; ?>" placeholder="<?php _t("Url"); ?>"></td> 
 <td><input class="form-control" type="text" name="contenido_estatus" value="<?php echo $contenido_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 