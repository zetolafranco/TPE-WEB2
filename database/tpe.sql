-- phpMyAdmin SQL Dump
                -- version 5.2.1
                -- https://www.phpmyadmin.net/
                --
                -- Servidor: 127.0.0.1
                -- Tiempo de generación: 17-10-2023 a las 20:39:52
                -- Versión del servidor: 10.4.28-MariaDB
                -- Versión de PHP: 8.2.4
                
                SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
                START TRANSACTION;
                SET time_zone = "+00:00";
                
                
                /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
                /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
                /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
                /*!40101 SET NAMES utf8mb4 */;
                
                --
                -- Base de datos: `tpe-web2`
                --
                
                -- --------------------------------------------------------
                
                --
                -- Estructura de tabla para la tabla `equipos`
                --
                
                CREATE TABLE `equipos` (
                  `id_equipo` int(29) NOT NULL,
                  `Nombre` text NOT NULL,
                  `Pais` text NOT NULL,
                  `Fundacion` varchar(10) NOT NULL,
                  `Estadio` varchar(50) NOT NULL,
                  `Entrenador` text NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
                
                --
                -- Volcado de datos para la tabla `equipos`
                --
                
                INSERT INTO `equipos` (`id_equipo`, `Nombre`, `Pais`, `Fundacion`, `Estadio`, `Entrenador`) VALUES
                (2, 'Argentinos Juniors', 'Argentina', '15/8/1904', '	Diego Armando Maradona', 'Pablo Guede'),
                (3, 'Arsenal', 'Argentina', '11/1/1957', '	Estadio Julio Humberto Grondona', 'Federico Vilar'),
                (4, 'Atletico Tucuman', 'Argentina', '27/9/1902 ', '	Estadio Monumental José Fierro', 'Sergio Gómez'),
                (5, 'Banfield', 'Argentina', '21/1/1896 ', '	Florencio Sola', 'Julio Cesar Falcioni'),
                (6, 'Barrracas Central', 'Argentina', '5/4/1904', '	Claudio Chiqui Tapia', 'Sergio Rondina'),
                (7, 'Belgrano', 'Argentina', '19/3/1905', '	Julio César Villagra', 'Guillermo Farré'),
                (8, 'Boca Juniors', 'Argentina', '3/4/1905 ', '	Alberto J. Armando «La Bombonera»', 'Jorge Almirón'),
                (9, 'Central Córdoba', 'Argentina', '3/6/1919', '	Alfredo Terreran ', 'Omar De Felippe'),
                (10, 'Colon', 'Argentina', '5/5/1905', '	Estadio Brigadier General Estanislao López', 'Néstor Gorosito'),
                (11, 'Defensa y Justicia', 'Argentina', '20/3/1935', '	Norberto Tomaghello', 'Julio Vaccari'),
                (12, 'Estudiantes de La Plata', 'Argentina', '4/8/1905', '	Jorge Luis Hirschi', 'Eduardo Domínguez'),
                (13, 'Gimnasia y Esgrima La Plata', 'Argentina', '3/6/1887', '	Juan Carmelo Zerillo', 'Leonardo Madelón'),
                (14, 'Godoy Cruz', 'Argentina', '1/6/1921 ', '	Estadio Feliciano Gambarte', 'Daniel Oldrá'),
                (15, 'Club Atlético Huracán', 'Argentina', '1/11/1908', '	Tomás Adolfo Ducó «El Palacio»', 'Diego Martínez'),
                (16, 'Club Atlético Independiente', 'Argentina', '4/8/1904', '	Libertadores de América', 'Carlos Tévez'),
                (17, 'Instituto', 'Argentina', '8/8/1918', '	Juan Domingo Perón', 'Diego Dabove'),
                (18, 'Club Atlético Lanús', 'Argentina', '3/1/1915', '	Estadio Ciudad de Lanús-Néstor Diaz', 'Sebastián Salomón'),
                (19, 'Club Atlético Newells Old Boys', 'Argentina', '3/11/1903', '	Marcelo Bielsa', 'Gabriel Heinze'),
                (20, 'Club Atlético Platense', 'Argentina', '25/5/1905', '        Estadio Ciudad de Vicente López', 'Martín Palermo'),
                (21, 'Racing Club', 'Argentina', '25/3/1903 ', '	Presidente Perón «El Cilindro de Avellaneda» ', 'Fernando Gago'),
                (22, 'Club Atlético River Plate', 'Argentina', '	25/5/1901', '	Mâs Monumental', 'Martín Demichelis'),
                (23, 'Club Atlético Rosario Central', 'Argentina', '24/12/1889', '	Gigante de Arroyito', 'Miguel Ángel Russo'),
                (24, 'Club Atlético San Lorenzo de Almagro', 'Argentina', '1/4/1908', '	Pedro Bidegain «El Nuevo Gasómetro»', 'Rubén Darío Insúa'),
                (25, 'Club Atlético Sarmiento', 'Argentina', '1/4/1911 ', '	Eva Perón', 'Pablo Lavallén'),
                (26, 'Club Atlético Talleres', 'Argentina', '12/10/1913', '	Estadio Francisco Cabasés', 'Javier Gandolfi'),
                (27, 'Club Atlético Tigre', 'Argentina', '3/8/1902 ', '	José Dellagiovanna «El Coliseo»', 'Lucas Pusineri'),
                (28, 'Club Atlético Unión', 'Argentina', '15/4/1907', '        15 de abril', 'Cristian González'),
                (29, 'Club Atlético Vélez Sarsfield', 'Argentina', '1/1/1910', '	José Amalfitani', 'Sebastián Méndez');
                
                -- --------------------------------------------------------
                
                --
                -- Estructura de tabla para la tabla `jugadores`
                --
                
                CREATE TABLE `jugadores` (
                  `id_jugador` int(10) NOT NULL,
                  `Nombre` text NOT NULL,
                  `Fecha de Nacimiento` int(10) NOT NULL,
                  `Nacionalidad` text NOT NULL,
                  `Posicion` varchar(15) NOT NULL,
                  `id_equipo` int(29) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
                
                -- --------------------------------------------------------
                
                --
                -- Estructura de tabla para la tabla `usuarios`
                --
                
                CREATE TABLE `usuarios` (
                  `id_usuario` int(11) NOT NULL,
                  `username` varchar(255) NOT NULL,
                  `password` varchar(255) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
                
                --
                -- Volcado de datos para la tabla `usuarios`
                --
                
                INSERT INTO `usuarios` (`id_usuario`, `username`, `password`) VALUES
                (1, 'webadmin', 'admin');
                
                --
                -- Índices para tablas volcadas
                --
                
                --
                -- Indices de la tabla `equipos`
                --
                ALTER TABLE `equipos`
                  ADD PRIMARY KEY (`id_equipo`);
                
                --
                -- Indices de la tabla `jugadores`
                --
                ALTER TABLE `jugadores`
                  ADD PRIMARY KEY (`id_jugador`),
                  ADD KEY `equipos_id_equipo_jugadores` (`id_equipo`);
                
                --
                -- Indices de la tabla `usuarios`
                --
                ALTER TABLE `usuarios`
                  ADD PRIMARY KEY (`id_usuario`);
                
                --
                -- AUTO_INCREMENT de las tablas volcadas
                --
                
                --
                -- AUTO_INCREMENT de la tabla `equipos`
                --
                ALTER TABLE `equipos`
                  MODIFY `id_equipo` int(29) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
                
                --
                -- AUTO_INCREMENT de la tabla `jugadores`
                --
                ALTER TABLE `jugadores`
                  MODIFY `id_jugador` int(10) NOT NULL AUTO_INCREMENT;
                
                --
                -- AUTO_INCREMENT de la tabla `usuarios`
                --
                ALTER TABLE `usuarios`
                  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
                
                --
                -- Restricciones para tablas volcadas
                --
                
                --
                -- Filtros para la tabla `jugadores`
                --
                ALTER TABLE `jugadores`
                  ADD CONSTRAINT `equipos_id_equipo_jugadores` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
                COMMIT;
                
                /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
                /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
                /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;