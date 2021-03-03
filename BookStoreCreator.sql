

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



-- create database named `bookstore`
CREATE DATABASE `bookstore`;

-- creating table `BookInventory`


CREATE TABLE `BookInventory` (
  `id` int(5) NOT NULL
  AUTO_INCREMENT,
  `bookname` varchar(80) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Creating table 'orders'


CREATE TABLE `orders` ( 
    `id` INT NOT NULL AUTO_INCREMENT ,
    `firstname` VARCHAR(50) NOT NULL ,
    `lastname` VARCHAR(50) NOT NULL , 
    `bookname` VARCHAR(80) NOT NULL , 
    `quantity` INT(5) NOT NULL ,
    `payment_method` VARCHAR(20) NOT NULL , 
    PRIMARY KEY (`id`))
    ENGINE = InnoDB; 


COMMIT;

