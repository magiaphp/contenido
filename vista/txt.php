<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
contenido_id : %contenido_id%
contenido_id_autor : %contenido_id_autor%
contenido_tipo : %contenido_tipo%
contenido_titulo : %contenido_titulo%
contenido_contenido : %contenido_contenido%
contenido_url : %contenido_url%
contenido_estatus : %contenido_estatus%
";

                include "./contenido/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>