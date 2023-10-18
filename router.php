<?php
require_once './app/controllers/home.controller.php';
require_once './app/controllers/equipos.controller.php';
require_once './app/controllers/jugadores.controller.php';
require_once './app/controllers/auth.controller.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// home    ->           HomeController->showHome();
// mostrar jugadores  ->  JugadoresController->showJugadores();
// mostrar jugadorId  ->  JugadoresController->showJugadorById($id);
// agregar jugador/:ID  -> JugadoresController->addJugador(); 
// eliminar jugador/:ID  -> JugadoresController->removeJugador($id);
// form editar jugador -> JugadoresController->formEditarJugador($id);
// editar jugador ->    JugadoresController->editarJugador($id);
// mostrar equipos ->    EquiposController->showEquipos();
// mostrar equipoId ->   EquiposController->showEquipoById($id);
// agregar equipo ->    EquiposController->addEquipo();
// eliminar equipo ->    EquiposController->removeEquipo();
// form editar equipo -> EquiposController->formEditarEquipo($id);
// editar equipo ->    EquiposController->editarEquipo();
// login ->             authContoller->showLogin();
// logout ->            authContoller->logout();
// auth                 authContoller->auth();

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new HomeController();
        $controller->showHome();
        break;
    case 'mostrarJugadores':
        $controller = new JugadoresController();
        $controller->showJugadores();
        break;
    case 'mostrarJugadorId':
        $controller = new JugadoresController();
        $controller->showJugadorById($params[1]);
        break;    
    case 'agregar jugador':
        $controller = new JugadoresController();
        $controller->addJugador();
        break;
    case 'eliminar jugador':
        $controller = new JugadoresController();
        $controller->removeJugador($params[1]);
        break;
    case 'form editar jugador':
        $controller = new JugadoresController();
        $controller->formEditarJugador($params[1]);
        break;   
    case 'editar jugador':
        $controller = new JugadoresController();
        $controller->editarJugador($params[1]);
        break;   
    case 'mostrarEquipos':
        $controller = new EquiposController();
        $controller->showEquipos();
        break;    
    case 'mostrarEquipoId':
        $controller = new EquiposController();
        $controller->showEquipoById($params[1]);
        break;   
        case 'agregar equipo':
        $controller = new EquiposController();
        $controller->addEquipo();
        break;
    case 'eliminar equipo':
        $controller = new EquiposController();
        $controller->removeEquipo($params[1]);
        break;   
    case 'form editar equipo':
        $controller = new EquiposController();
        $controller->formEditarEquipo($params[1]);
        break;
    case 'editar equipo':
        $controller = new EquiposController();
        $controller->editarEquipo($params[1]);
        break;
    case 'login':
        $controller = new AuthController();
        $controller->showLogin(); 
        break;
    case 'auth':
        $controller = new AuthController();
        $controller->auth();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    default: 
        echo "404 Page Not Found";
        break;
}
?>