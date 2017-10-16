<?php 
 /**  
 magia_version: 0.0.11 
 **/ 

  $contenido_id = $contenido['id']; 
  $contenido_id_autor = $contenido['id_autor']; 
  $contenido_tipo = $contenido['tipo']; 
  $contenido_titulo = $contenido['titulo']; 
  $contenido_contenido = $contenido['contenido']; 
  $contenido_url = $contenido['url']; 
  $contenido_estatus = $contenido['estatus']; 
 $contenido_estatus_0 = "";   $contenido_estatus_1 = "";      if($contenido_estatus==0){
      $contenido_estatus_0 = " checked "; 
      $contenido_estatus_1 = ""; 
  }else {
      $contenido_estatus_0 = ""; 
      $contenido_estatus_1 = "checked";       
  }  
