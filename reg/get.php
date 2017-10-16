<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$contenido_id = mysql_real_escape_string($_GET['contenido_id']); 
    $contenido_id_autor = (isset($_GET['contenido_id_autor']))?mysql_real_escape_string($_GET['contenido_id_autor']):null;   
    $contenido_tipo = (isset($_GET['contenido_tipo']))?mysql_real_escape_string($_GET['contenido_tipo']):null;   
    $contenido_titulo = (isset($_GET['contenido_titulo']))?mysql_real_escape_string($_GET['contenido_titulo']):null;   
    $contenido_contenido = (isset($_GET['contenido_contenido']))?mysql_real_escape_string($_GET['contenido_contenido']):null;   
    $contenido_url = (isset($_GET['contenido_url']))?mysql_real_escape_string($_GET['contenido_url']):null;   
    $contenido_estatus = (isset($_GET['contenido_estatus']))?mysql_real_escape_string($_GET['contenido_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }