<?php

class JugadoresView {
    public function showJugadores($jugadores, $equipos){
        require_once './templates/jugadoresList.phtml';
    }

    function showJugador($jugador){
        require_once './templates/jugadoresInfo.phtml';
    }

    function formEditarJugador($jugador, $equipos){
        require_once './templates/formEditarEquipo.phtml';
    }

    public function showError($error) {
        require './templates/error.phtml';
    }
}
?>