<?php require_once "./app/config/config.php";

    class Model {
        protected $db;

        function __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=tpe-web2;charset=utf8mb4', 'root', '');
            $this->deploy();
        }

        function deploy() {
            // Chequear si hay tablas
            $query = $this->db->query('SHOW DATABASES LIKE "tpe-web2"');
            $tables = $query->fetchAll(); // Nos devuelve todas las tablas de la db
            $dbExists = $query->rowCount() > 0;
            if (!$dbExists) {
                // Si la base de datos no existe, créala
                $this->db->exec('CREATE DATABASE tpe-web2');
            }
    
            // Seleccionar la base de datos "tpe_web2"
            $this->db->exec('USE tpe-web2');

            $this->db->exec('
            CREATE TABLE IF NOT EXISTS `equipos` (
                `id_equipo` int(29) NOT NULL,
                `nombre` text NOT NULL,
                `pais` text NOT NULL,
                `fundacion` varchar(10) NOT NULL,
                `estadio` varchar(50) NOT NULL,
                `entrenador` text NOT NULL
                PRIMARY KEY (`id_equipo`)
                )
                ');

        $query = $this->db->query('SELECT * FROM `equipos`');
        if ($query->rowCount() == 0) {
            $this->db->exec('
            INSERT INTO `equipos` (`id_equipo`, `nombre`, `pais`, `fundacion`, `estadio`, `entrenador`) VALUES
(2, "Argentinos Juniors", "Argentina", "15/8/1904", "	Diego Armando Maradona", "Pablo Guede"),
(3, "Arsenal", "Argentina", "11/1/1957", "	Estadio Julio Humberto Grondona", "Federico Vilar"),
(4, "Atletico Tucuman", "Argentina", "27/9/1902 ", "	Estadio Monumental José Fierro", "Sergio Gómez"),
(5, "Banfield", "Argentina", "21/1/1896 ", "	Florencio Sola", "Julio Cesar Falcioni"),
(6, "Barrracas Central", "Argentina", "5/4/1904", "	Claudio Chiqui Tapia", "Sergio Rondina"),
(7, "Belgrano", "Argentina", "19/3/1905", "	Julio César Villagra", "Guillermo Farré"),
(8, "Boca Juniors", "Argentina", "3/4/1905 ", "	Alberto J. Armando «La Bombonera»", "Jorge Almirón"),
(9,  "Central Córdoba", "Argentina", "3/6/1919", "	Alfredo Terreran ", "Omar De Felippe"),
(10, "Colon", "Argentina", "5/5/1905", "	Estadio Brigadier General Estanislao López", "Néstor Gorosito"),
(11, "Defensa y Justicia", "Argentina", "20/3/1935", "	Norberto Tomaghello", "Julio Vaccari"),
(12, "Estudiantes de La Plata", "Argentina", "4/8/1905", "	Jorge Luis Hirschi", "Eduardo Domínguez"),
(13, "Gimnasia y Esgrima La Plata", "Argentina", "3/6/1887", "	Juan Carmelo Zerillo", "Leonardo Madelón"),
(14, "Godoy Cruz", "Argentina", "1/6/1921 ", "	Estadio Feliciano Gambarte", "Daniel Oldrá"),
(15, "Club Atlético Huracán", "Argentina", "1/11/1908", "	Tomás Adolfo Ducó «El Palacio»", "Diego Martínez"),
(16, "Instituto", "Argentina", "8/8/1918", "	Juan Domingo Perón", "Diego Dabove"),
(17, "Club Atlético Independiente", "Argentina", "4/8/1904", "	Libertadores de América", "Carlos Tévez"),
(18, "Club Atlético Newells Old Boys", "Argentina", "3/11/1903", "	Marcelo Bielsa", "Gabriel Heinze"),
(20, "Club Atlético Platense", "Argentina", "25/5/1905", "        Estadio Ciudad de Vicente López", "Martín Palermo"),
(21, "Racing Club", "Argentina", "25/3/1903 ", "	Presidente Perón «El Cilindro de Avellaneda» ", "Fernando Gago"),
(22, "Club Atlético River Plate", "Argentina", "	25/5/1901", "	Mâs Monumental", "Martín Demichelis"),
(23, "Club Atlético Rosario Central", "Argentina", "24/12/1889", "	Gigante de Arroyito", "Miguel Ángel Russo"),
(24, "Club Atlético San Lorenzo de Almagro", "Argentina", "1/4/1908", "	Pedro Bidegain «El Nuevo Gasómetro»", "Rubén Darío Insúa"),
(25, "Club Atlético Sarmiento", "Argentina", "1/4/1911 "", "	Eva Perón", "Pablo Lavallén"),
(26, "Club Atlético Talleres", "Argentina", "12/10/1913", "	Estadio Francisco Cabasés", "Javier Gandolfi"),
(27, "Club Atlético Tigre", "Argentina", "3/8/1902 ", "	José Dellagiovanna «El Coliseo»", "Lucas Pusineri"),
(28, "Club Atlético Unión", "Argentina", "15/4/1907", "        15 de abril", "Cristian González")
(29, "Club Atlético Vélez Sarsfield", "Argentina", "1/1/1910", "	José Amalfitani", "Sebastián Méndez");
');
}

$this->db->exec('
CREATE TABLE IF NOT EXISTS `jugadores` (
    `id_jugador` int(10) NOT NULL,
    `nombre` text NOT NULL,
    `fecha de nacimiento` int(10) NOT NULL,
    `nacionalidad` text NOT NULL,
    `posicion` varchar(15) NOT NULL,
    `id_equipo` int(29) NOT NULL,
    PRIMARY KEY (`id_jugador`),
    KEY `equipos_id_equipo_jugadores` (`id_equipo`),
    CONSTRAINT `equipos_id_equipo_jugadores` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`)
    )
    ');

    $query = $this->db->query('SELECT * FROM `jugadores`');
    if ($query->rowCount() == 0) {
        $this->db->exec('
        INSERT INTO `jugadores` (`id_jugador`, `nombre`, `fecha de nacimiento`, `nacionalidad`, `posicion`, `id_equipo`) VALUES
(1, "Darío Ismael Benedetto", "17/5/1990 ", "Argentina", "Delantero "", 8),
(2, "Gonzalo Nicolás Martínez", "13/6/993 "", "Argentina", "Extremo", 22),
(3, "Gabriel Arias Arroyo", "13/9/1987", "Chile", "Arquero", 21),
(5, "Cristian Nahuel Barrios", "7/5/1998", "Argentina", "Delantero , 24),
(6, "Braian Miguel Ángel Martínez", "18/8/1999 ", "Argentina", "Extremo", 16);
');
}

$this->db->exec('
CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` int(11) NOT NULL,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
    )
    ');

    $query = $this->db->query('SELECT * FROM `usuarios`');
        if ($query->rowCount() == 0) {
            $password = 'admin';
            $passwordEncriptada = password_hash($password, PASSWORD_BCRYPT);
            $this->db->exec('
                INSERT INTO `usuarios` (`username`, `password`) VALUES
                ("webadmin", "' . $passwordEncriptada . '")
            ');
        }

}
}