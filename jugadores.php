<?php
require_once 'con_db.php';
function Listarjugadores () {
$jugadores = getJugadores();

echo "<ul>";
foreach ($jugadores as $jugador){
    echo '<li class="jugador">' . $jugador->titulo . '<li>';
}
echo "<ul>";
}

?>