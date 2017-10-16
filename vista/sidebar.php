<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="contenido"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="contenido_id_autor" class="col-sm-2 control-label"><?php _t("Autor");?></label> 
       <input type="text" class="form-control" name="contenido_id_autor" id="contenido_id_autor" placeholder="<?php _t("Id_autor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="contenido_tipo" class="col-sm-2 control-label"><?php _t("Tipo");?></label> 
       <input type="text" class="form-control" name="contenido_tipo" id="contenido_tipo" placeholder="<?php _t("Tipo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="contenido_titulo" class="col-sm-2 control-label"><?php _t("Titulo");?></label> 
       <input type="text" class="form-control" name="contenido_titulo" id="contenido_titulo" placeholder="<?php _t("Titulo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="contenido_contenido" class="col-sm-2 control-label"><?php _t("Contenido");?></label> 
       <input type="text" class="form-control" name="contenido_contenido" id="contenido_contenido" placeholder="<?php _t("Contenido"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="contenido_url" class="col-sm-2 control-label"><?php _t("Url");?></label> 
       <input type="text" class="form-control" name="contenido_url" id="contenido_url" placeholder="<?php _t("Url"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="contenido_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="contenido_estatus" id="contenido_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
