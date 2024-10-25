SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `descricao` text DEFAULT NULL,
  `local` varchar(255) DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `eventos` (`id`, `nome`, `data`, `hora_inicio`, `hora_fim`, `descricao`, `local`, `responsavel`) VALUES
(3, 'Meta certa', '2023-10-21', '11:00:00', '20:00:00', 'experiencia com Deus', 'Colegio arabe', 'shalom gru'),
(4, 'fwf', '5999-05-07', '04:45:00', '05:45:00', 'wafe', 'fqwf\\s', 'f,mf n,qw'),
(5, 'fwf', '5999-05-07', '04:45:00', '05:45:00', 'wafe', 'fqwf\\s', 'f,mf n,qw'),
(6, 'fwf', '5999-05-07', '04:45:00', '05:45:00', 'wafe', 'fqwf\\s', 'f,mf n,qw');


ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
