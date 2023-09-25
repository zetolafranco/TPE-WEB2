<!DOCTYPE html>
<html>
<head>
    <title>Formulario para Agregar Equipo</title>
</head>
<body>
    <h2>Agregar Equipo</h2>
    <form action="procesar_equipo.php" method="POST">
        <label for="nombre">Nombre del Equipo:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required><br>

        <label for="fundacion">Fecha de Fundación:</label>
        <input type="date" id="fundacion" name="fundacion" required><br>

        <label for="estadio">Estadio:</label>
        <input type="text" id="estadio" name="estadio" required><br>

        <label for="entrenador">Entrenador:</label>
        <input type="text" id="entrenador" name="entrenador" required><br>

        <input type="submit" value="Agregar Equipo">
    </form>
</body>
</html>
