<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "contenido"=>[ "id"=>"$contenido_id",  
 "id_autor"=>"$contenido_id_autor",  
 "tipo"=>"$contenido_tipo",  
 "titulo"=>"$contenido_titulo",  
 "contenido"=>"$contenido_contenido",  
 "url"=>"$contenido_url",  
 "estatus"=>"$contenido_estatus",  
                ]
        ];  $html = str_replace('%contenido_id%',       $datos['contenido']['id'], $html); 
  $html = str_replace('%contenido_id_autor%',       $datos['contenido']['id_autor'], $html); 
  $html = str_replace('%contenido_tipo%',       $datos['contenido']['tipo'], $html); 
  $html = str_replace('%contenido_titulo%',       $datos['contenido']['titulo'], $html); 
  $html = str_replace('%contenido_contenido%',       $datos['contenido']['contenido'], $html); 
  $html = str_replace('%contenido_url%',       $datos['contenido']['url'], $html); 
  $html = str_replace('%contenido_estatus%',       $datos['contenido']['estatus'], $html); 
