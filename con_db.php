<?php
function getJugadores() {
    $db = new PDO('mysql:host=localhost;'
    .'dbname=tpe-web2;charset=utf8'
    , 'root', '');
    
    $query = $db->prepare( 'SELECT * FROM jugadores');
    $query->execute();
    $jugadores = $query->fetchAll(PDO::FETCH_OBJ);
    
    return $jugadores;   
}
?>