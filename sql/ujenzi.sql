


-- Create database

 CREATE DATABASE ujenzi;

 -- Create table admin

 CREATE TABLE admin (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 -- Create table contractor


CREATE TABLE client (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(20),
   	lastname VARCHAR(20),
    dateofbirth DATE,
   	nat_id VARCHAR(20),
    country VARCHAR(20),
    county VARCHAR(20),
    town VARCHAR(20),
    email VARCHAR(20),
    mobileno VARCHAR(20),
    telephone VARCHAR(20),
    password VARCHAR(20),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP  ON UPDATE CURRENT_TIMESTAMP
    )