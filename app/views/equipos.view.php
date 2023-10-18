<?php
require_once './templates/header.phtml';  
class EquiposView {    
    function showEquipos($equipos){
        require_once './templates/equiposList.phtml';
    }
    function showEquipo($equipo){
        require_once './templates/equiposInfo.phtml';
    }
    function formEditarEquipo($equipo){
        require_once './templates/formEditarEquipo.phtml';
    }
    function showError($error) {
        require_once './templates/error.phtml';
    }
}
require_once './templates/footer.phtml';  