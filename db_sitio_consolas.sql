-- la base de datos por si acaso jajajaj'
CREATE DATABASE IF NOT EXISTS `registros` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `registros`;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `numero_tlf` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`cedula`, `nombre`, `apellido`, `numero_tlf`, `email`) VALUES
('V-12345678', 'Juan Carlos', 'Pérez García', '0212-1234567', 'juan.perez@email.com');