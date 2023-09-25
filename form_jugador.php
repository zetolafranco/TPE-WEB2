<!DOCTYPE html>
<html>
<head>
    <title>Agregue los Jugadores</title>
</head>
<body>
    <h2>Complete sus caracteristicas</h2>
    <form action="router.php?action=createPlayer" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>

        <label for="nacionalidad">Nacionalidad:</label>
        <input type="text" id="nacionalidad" name="nacionalidad" required><br>

        <label for="posicion">Posicion:</label>
        <input type="text" id="posicion" name="posicion" required><br>

        <label for="altura">Altura (cm):</label>
        <input type="number" id="altura" name="altura" required><br>

        <label for="equipo_id">Equipo:</label>
        <select id="equipo_id" name="equipo_id" required>
            <option value="1">Argentinos Juniors</option>
            <option value="2">Arsenal</option>
            <option value="3">Atletico Tucuman</option>
            <option value="4">Banfield</option>
            <option value="5">Barracas Central</option>
            <option value="6">Belgrano</option>
            <option value="7">Boca Juniors</option>
            <option value="8">Central Cordoba</option>
            <option value="9">Colon</option>
            <option value="10">Defensa y Justicia</option>
            <option value="11">Estudiantes de La Plata</option>
            <option value="12">Gimnasia La Plata</option>
            <option value="13">Godoy Cruz</option>
            <option value="14">Huracan</option>
            <option value="15">Independiente</option>
            <option value="16">Instituto</option>
            <option value="17">Lanus</option>
            <option value="18">Newells Old Boys</option>
            <option value="19">Platense</option>
            <option value="20">Racing Club</option>
            <option value="21">River Plate</option>
            <option value="22">Rosario Central</option>
            <option value="23">San Lorenzo</option>
            <option value="24">Sarmiento</option>
            <option value="25">Talleres</option>
            <option value="26">Tigre</option>
            <option value="27">Unión</option>
            <option value="28">Velez Sarsfield</option>
        </select><br>

        <input type="submit" value="Crear Jugador">
    </form>
</body>
</html>
