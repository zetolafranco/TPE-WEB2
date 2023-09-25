<?php
    $db = new PDO('mysql:host=localhost;'
    .'dbname=tpe-web2;charset=utf8mb4'
    , 'root', '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $pais = $_POST['pais'];
    $fundacion = $_POST['fundacion'];
    $estadio = $_POST['estadio'];
    $entrenador = $_POST['entrenador'];

    // Inserta los datos en la tabla de equipos
    $sql = "INSERT INTO equipos (nombre, pais, fundacion, estadio, entrenador) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre, $pais, $fundacion, $estadio, $entrenador]);

}
?>
