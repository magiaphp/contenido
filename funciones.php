<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function contenido_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM contenido WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function contenido_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($contenido = mysql_fetch_array($sql)) {
        //include "../gestion/contenido/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $contenido[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $contenido[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$contenido[$campo]\">$contenido[$campo]</option> \n";
    }
}

function contenido_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM contenido  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($contenido = mysql_fetch_array($sql)) {
    
        include "../gestion/contenido/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$contenido[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$contenido[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$contenido[0]\">$contenido[0]</option>";
   echo "value=\"$contenido[0]\">$contenido_contenido</option>";
} 
}
/**/
function contenido_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM contenido   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function contenido_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM contenido  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }
    
    return $data;
}
/**
 * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
 */
function contenido_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'contenido_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function contenido_thead($ganchos=array()){
    
    $campo_disponibles = contenido_campos_disponibles();   
    $contenido_campos_a_mostrar = contenido_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $contenido_campos_a_mostrar)){
            echo "<th>"._tr($value)."</th> "; 
        }        
    }
    

    if ($gancho) {
        $i = 0;
        while ($i < count($gancho)) {
            echo "<th>$gancho[$i]</th>";
            $i++;
        }
    }
    



    echo "<th>"._tr("Acción")."</th> "; // accion             
    echo "    </tr>
    </thead>"; 
}
/**
 * 
 */
function contenido_tfoot(){    
   contenido_thead();
}


