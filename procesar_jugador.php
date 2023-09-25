<?php
    $db = new PDO('mysql:host=localhost;'
    .'dbname=tpe-web2;charset=utf8'
    , 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $nacionalidad = $_POST['nacionalidad'];
    $posicion = $_POST['posicion'];
    $altura = $_POST['altura'];
    $id_equipo = $_POST['id_equipo'];

    // Inserta los datos en la tabla de jugadores
    $sql = "INSERT INTO jugadores (nombre, fecha_nacimiento, nacionalidad, posicion, altura, id_equipo) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre, $fechaNacimiento, $nacionalidad, $posicion, $altura, $id_equipo]);
}
?>
