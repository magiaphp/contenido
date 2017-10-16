<?php /**
  magia_version: 0.0.11
 * */ ?>
<h2>

    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
    <input type="hidden" name="p" value="contenido"> 
    <input type="hidden" name="c" value="crear"> 
    <input type="hidden" name="a" value="crear"> 

    <div class="form-group"> 
        <label for="contenido_id_autor" class="col-sm-2 control-label"><?php _t("Autor"); ?></label> 
        <div class="col-sm-10"> 
            <select class="form-control" name="contenido_id_autor" >
                <?php
                //_grupos_add($contenido_id_autor);
                contactos_add($contenido_id_autor);
                ?>
            </select>
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contenido_tipo" class="col-sm-2 control-label"><?php _t("Tipo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contenido_tipo" id="contenido_tipo" placeholder="<?php _t("Tipo"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contenido_titulo" class="col-sm-2 control-label"><?php _t("Titulo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contenido_titulo" id="contenido_titulo" placeholder="<?php _t("Titulo"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contenido_contenido" class="col-sm-2 control-label"><?php _t("Contenido"); ?></label> 
        <div class="col-sm-10"> 
            <textarea  class="form-control" name="contenido_contenido" id="contenido_contenido" placeholder="<?php _t("Contenido"); ?>"></textarea> 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contenido_url" class="col-sm-2 control-label"><?php _t("Url"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="contenido_url" id="contenido_url" placeholder="<?php _t("Url"); ?>" value=""   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="contenido_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
        <div class="col-sm-10"> 
            <div class="radio">
                <label>
                    <input  type="radio" name="contenido_estatus" value="1" >
                    <?php _t("Activo"); ?> 
                </label>
            </div>
            <div class="radio">
                <label>
                    <input  type="radio" name="contenido_estatus" value="0"  checked >
                    <?php _t("Bloqueado"); ?>  
                </label>
            </div>
        </div> 
    </div> 


    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
        </div> 
    </div> 
</form> 
