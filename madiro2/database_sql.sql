
--
-- Database: `manutrition``
--

CREATE DATABASE IF NOT EXISTS `manutrition` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `manutrition`;

-- --------------------------------------------------------

--
-- Table structure for table ,manutrition`
--

DROP TABLE IF EXISTS `manutrition`;
CREATE TABLE `manutrition`.`manutrition` ( 
  `ID` INT(50) NOT NULL ,  
  `Parent_name` VARCHAR(50) NOT NULL , 
  `Gender parent` VARCHAR(50) NOT NULL ,
  `Phone` INT(50) NOT NULL ,
  `Child name` VARCHAR(50) NOT NULL ,
  `Child age` INT(50) NOT NULL ,
  `Birthday` DATE NOT NULL ,
  `Gender child` VARCHAR(50) NOT NULL ,
  `Number of women` INT(50) NOT NULL ,
  `Female name` VARCHAR(50) NOT NULL ,
  `Age` INT(50) NOT NULL ,
  `Pregnancy status` VARCHAR(50) NOT NULL ,
  `Sources` VARCHAR(50) NOT NULL ,
  `Distances` VARCHAR(50) NOT NULL ,
  `Ranking` VARCHAR(50) NOT NULL ,
  `Rubish` VARCHAR(50) NOT NULL ,
  `Kitchen` VARCHAR(50) NOT NULL ,
  `Cooking` VARCHAR(50) NOT NULL ,
  `Breast feeding mother` VARCHAR(50) NOT NULL ,
  `Oedema` VARCHAR(25) NOT NULL ,
  `Yes` VARCHAR(50) NOT NULL ,
  `Weight` VARCHAR(25) NOT NULL ,
  `MUAC` VARCHAR(25) NOT NULL ,
  `Color` VARCHAR(100) NOT NULL ,
  `Feeding` VARCHAR(11) NOT NULL 
  ENGINE = InnoDB;  DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manutrition`
--
ALTER TABLE `manutrition`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manutrition`
--
ALTER TABLE `manutrition`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;