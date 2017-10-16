 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "contenido"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $contenido_id 		= mysql_real_escape_string($_REQUEST['contenido_id']);   
     include "./contenido/modelos/ver.php"; 
     include "./contenido/reg/reg.php"; 
     include "./contenido/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
