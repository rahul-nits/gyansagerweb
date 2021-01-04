CREATE TABLE `user`(
    `Sch` INT(15) NOT NULL PRIMARY KEY,
    `Name` VARCHAR(20) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `Password` VARCHAR(50) NOT NULL,
    `Mobile` INT(10) NOT NULL,
    `Gender` ENUM('Male', 'Female') NOT NULL,
    `role` VARCHAR(10) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


CREATE TABLE `tbl_feedback`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(20) NOT NULL,
    `experience` ENUM('Bad', 'Average', 'Good') NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `mobile` INT(10) NOT NULL,
    `comment` VARCHAR(200) NOT NULL,
    `status` INT NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


CREATE TABLE `tbl_event`(
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `ename` VARCHAR(100) NOT NULL,
    `edate` VARCHAR(30) NOT NULL,
    `venue` VARCHAR(100) NOT NULL,
    `description` VARCHAR(200) NOT NULL,
    `date-created` VARCHAR(30) NOT NULL,
    `isapproved` INT(2) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;




CREATE TABLE `attendance`(
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `ename` VARCHAR(100) NOT NULL,
    `edate` VARCHAR(30) NOT NULL,
    `A` INT NOT NULL,
    `B` INT NOT NULL,
    `C` INT NOT NULL,
    `D` INT NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;


