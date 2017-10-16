 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO contenido ( 
 id_autor 
 ,  tipo 
 ,  titulo 
 ,  contenido 
 ,  url 
 ,  estatus 
 ) VALUES ( 
 :id_autor 
 ,  :tipo 
 ,  :titulo 
 ,  :contenido 
 ,  :url 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_autor"=>"$contenido_id_autor" 
 ,  ":tipo"=>"$contenido_tipo" 
 ,  ":titulo"=>"$contenido_titulo" 
 ,  ":contenido"=>"$contenido_contenido" 
 ,  ":url"=>"$contenido_url" 
 ,  ":estatus"=>"$contenido_estatus" 
             ) 
 ); 


if($config_debug){
    echo "<h3>Debug mode (".__FILE__." )</h3>";
    
    $variables = array(
        "\$sql"=>"$sql"
    );
        
    echo "<table border>";
    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
    foreach ($variables as $key => $value) {
        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
    }    
    echo "</table>";

}