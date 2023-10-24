<?php

require_once './app/models/model.php';
class JugadoresModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe-web2;charset=utf8mb4','root','');;
    }

    /**
     * Obtiene y devuelve de la base de datos todas las tareas.
     */
    function getJugadores() {
        $query = $this->db->prepare('SELECT * FROM jugadores');
        $query->execute();

        // $tasks es un arreglo de tareas
        $jugadores = $query->fetchAll(PDO::FETCH_OBJ);

        return $jugadores;
    }

    function getJugadorById($id){
        $query = $this->db->prepare('SELECT jugadores.*, equipos.nombre AS nombre FROM jugadores INNER JOIN equipos ON jugadores.id_equipo =equipos.id_equipo WHERE id_jugador = ?');
        $query->execute([$id]);

        $jugador = $query->fetch(PDO::FETCH_OBJ);
        return $jugador;
    }
    /**
     * Inserta la tarea en la base de datos
     */

    function insertJugador($nombre, $fecha_de_nacimiento, $nacionalidad, $posicion, $id_equipo) {
        $query = $this->db->prepare('INSERT INTO jugadores (nombre, fecha_de_nacimiento, nacionalidad, posicion, id_equipo) VALUES(?,?,?,?,?)');
        $query->execute([$nombre, $fecha_de_nacimiento, $nacionalidad, $posicion, $id_equipo]);

        return $this->db->lastInsertId();
    }
 
   function deleteJugador($id) {
    $query = $this->db->prepare('DELETE FROM jugadores WHERE id_jugador = ?');
    $query->execute([$id]);
   }

   function editarJugador($id, $nombre, $fecha_de_nacimiento, $nacionalidad, $posicion, $id_equipo){
    $query = $this->db->prepare('UPDATE jugadores SET nombre = ?, fecha_de_nacimiento = ?, nacionalidad = ?, posicion = ?, id_equipo = ? WHERE id_jugador = ?');    
    $query->execute([$nombre,  $fecha_de_nacimiento, $nacionalidad, $posicion, $id_equipo, $id]);
   }

   function removeTodo($id){
    $query = $this->db->prepare('DELETE FROM jugadores WHERE id_equipo = ?');
    $query->execute([$id]);
}
}

