<?php
require_once './app/models/jugadores.model.php';
require_once './app/views/jugadores.view.php';
require_once './helpers/auth.helper.php';
require_once './models/equipos.model.php';

class JugadoresController {
    private $model;
    private $view;
    private $equiposModel;

    public function __construct() {
        AuthHelper::verify();
        $this->model = new JugadoresModel();
        $this->view = new JugadoresView();
        $this->equiposModel = new EquiposModel();
    }

    public function showJugadores() {
        $jugadores = $this->model->getJugadores();
        $equipos = $this->equiposModel->getEquipos();
        $this->view->showJugadores($jugadores, $equipos);
    }

    function showJugadorById($id){
        $jugador = $this->model->getJugadorById($id);
        $this->view->showJugador($jugador);
    }
    
    public function addJugador() {
          AuthHelper::verify();
          $Nombre = $_POST['Nombre'];
          $Fecha_de_nacimiento = $_POST['Fecha_de_nacimiento'];
          $Nacionalidad = $_POST['Nacionalidad'];
          $Posicion = $_POST['Posicion'];
          $id_equipo = $_POST ['id_equipo'];
          // validaciones
            if (empty($Nombre) || empty($Fecha_de_nacimiento) || empty($Nacionalidad) || empty($Posicion) || empty($id_equipo)) {
              $this->view->showError("Debe completar todos los campos");
              return;
        }

        $id = $this->model->insertJugador($Nombre, $Fecha_de_nacimiento, $Nacionalidad, $Posicion, $id_equipo);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            $this->view->showError("Error al insertar el jugador");
        }
    }

    function removeJugador($id) {
        AuthHelper::verify();
        $this->model->deleteJugador($id);
        header('Location: ' . '/jugadoresList');
    }
    
    public function formEditarJugador($id) {
        AuthHelper::verify();
        $jugador = $this->model->getJugadorById($id);
        $equipos = $this->equiposModel->getEquipos();
        $this->view->formEditarJugador($jugador, $equipos);
    }
    public function editarJugador($id){
        AuthHelper::verify();
        $Nombre = $_POST['Nombre'];
        $Fecha_de_nacimiento = $_POST['Fecha_de_nacimiento'];
        $Nacionalidad = $_POST['Nacionalidad'];
        $Posicion = $_POST['Posicion'];
        $id_equipo = $_POST ['id_equipo'];
        // validaciones
        if (empty($Nombre) || empty($Fecha_de_nacimiento) || empty($Nacionalidad)  || empty($Posicion) || empty($id_equipo)) {
            $this->view->showError("Debe completar todos los campos");
            return;
      }
                $this->model->editarJugador($Nombre, $Fecha_de_nacimiento, $Nacionalidad, $Posicion, $id_equipo, $id);
                if ($id) {
                    header('Location: ' . BASE_URL);
                } else {
                    $this->view->showError("Error al editar el jugador");
                }
        }
}