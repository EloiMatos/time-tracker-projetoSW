CREATE TABLE `horas` (
  `id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `startHours` datetime(6) NOT NULL,
  `endHours` datetime(6) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `horas`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `horas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;