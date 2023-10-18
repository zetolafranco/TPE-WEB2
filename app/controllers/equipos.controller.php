<?php
require_once './app/models/equipos.model.php';
require_once './app/views/equipos.view.php';
require_once './app/helpers/auth.helper.php';

class EquiposController {
    private $model;
    private $view;
    private $jugadoresModel;

    public function __construct() {
        AuthHelper::verify();
        $this->model = new EquiposModel();
        $this->view = new EquiposView();
        $this->jugadoresModel = new JugadoresModel();
    }

    public function showEquipos() {
        $equipos = $this->model->getEquipos();
        $this->view->showEquipos($equipos);
    }

    function showEquipoById($id){
        $equipo = $this->model->getEquipoById($id);
        $this->view->showEquipo($equipo);
    }

    function addEquipo() {
        AuthHelper::verify();
            $Nombre = $_POST['Nombre'];
            $Pais = $_POST['Pais'];
            $Fundacion = $_POST['Fundacion'];
            $Estadio = $_POST['Estadio'];
            $Entrenador = $_POST['Entrenador'];

        if (empty($Nombre) || empty($Pais) || empty($Fundacion) || empty($Estadio) || empty($Entrenador)) {
            $this->view->showError("Debe completar todos los campos");
            return;
        }

        $id = $this->model->insertEquipo($Nombre, $Pais, $Fundacion, $Estadio, $Entrenador);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            $this->view->showError("Error al insertar el equipo");
        }
    }

    function removeEquipo($id) {
        AuthHelper::verify();
        $get_equipo=$this->model->getEquipoById($id);
        $this->jugadoresModel->removeTodo($id);
        $this->model->removeEquipoById($id);
        $equipo_remove=$this->model->getEquipoById($id);
        if (empty($equipo_remove)) {
            $this->showEquipos($get_equipo);
        } else {
            $this->view->showError("Error al eliminar el equipo");
        }
    } 

    function formEditarEquipo($id) {
        AuthHelper::verify();
        $equipo = $this->model->getEquipoById($id);
        $this->view->formEditarEquipo($equipo);
    }

    function editarEquipo($id){
        AuthHelper::verify();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $pais = $_POST['pais'];
            $fundacion = $_POST['fundacion'];
            $estadio = $_POST['estadio'];
            $entrenador = $_POST['entrenador'];

            if (empty($nombre) || empty($pais) || empty($fundacion) || empty($estadio) || empty($entrenador)) {
                $this->view->showError("Debe completar todos los campos");
                return;
        }

                $this->model->editarEquipo($id, $nombre, $pais, $fundacion, $estadio, $entrenador);
                if ($id) {
                    header('Location: ' . BASE_URL);
                } else {
                    $this->view->showError("Error al editar el equipo");
                }
            }
        }
    }
