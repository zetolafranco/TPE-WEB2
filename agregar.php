// Ejemplo de inserción de equipos en la base de datos
<?php
$equipos = [
    ["nombre" => "Equipo 1", "pais" => "País 1", "fundacion" => "2020-01-01", "estadio" => "Estadio 1", "entrenador" => "Entrenador 1"],
    ["nombre" => "Equipo 2", "pais" => "País 2", "fundacion" => "2019-01-01", "estadio" => "Estadio 2", "entrenador" => "Entrenador 2"],
    // Agrega más equipos según sea necesario
];

foreach ($equipos as $equipo) {
    $sql = "INSERT INTO equipos (nombre, pais, fundacion, estadio, entrenador) VALUES (:nombre, :pais, :fundacion, :estadio, :entrenador)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($equipo);
}
?>
