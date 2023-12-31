<?php

require_once './app/models/model.php';

class EquiposModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8mb4','root','');;
    }

    /**
     * Obtiene y devuelve de la base de datos todos los equipos.
     */
    function getEquipos() {
        $query = $this->db->prepare('SELECT * FROM equipos');
        $query->execute();

        // $equipos es un arreglo de equipos
        $equipos = $query->fetchAll(PDO::FETCH_OBJ);

        return $equipos;
    }

    function getEquipoById($id){
        $query = $this->db->prepare('SELECT * FROM equipos WHERE id_equipo = ?');
        $query->execute([$id]);

        $equipo = $query->fetch(PDO::FETCH_OBJ);
        return $equipo;
    }

    /**
     * Inserta la tarea en la base de datos
     */

    function insertEquipo($nombre, $pais, $fundacion, $estadio, $entrenador){
        $query = $this->db->prepare('INSERT INTO equipos (nombre, pais, fundacion, estadio, entrenador) VALUES(?,?,?,?,?)');
        $query->execute([$nombre, $pais, $fundacion, $estadio, $entrenador]);

        return $this->db->lastInsertId();
    }
 
    function deleteEquipo($id){
        $query = $this->db->prepare('DELETE FROM equipos WHERE id_equipo = ?');
        $query->execute([$id]);
    }

    function editarEquipo($id, $nombre, $pais, $fundacion, $estadio, $entrenador){
        $query = $this->db->prepare('UPDATE equipos SET nombre = ?, pais = ?, fundacion = ?, estadio = ?, entrenador= ? WHERE id_club = ?');
        $query->execute([$id, $nombre, $pais, $fundacion, $estadio, $entrenador]);
    }
    function removeEquipoById($id){
        $query = $this->db->prepare('DELETE FROM equipos WHERE id_equipos = ?');
        $query->execute([$id]);
    }
}
