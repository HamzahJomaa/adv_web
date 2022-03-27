
CREATE DATABASE IF NOT EXISTS `turbodb`;

    ----- Category Table ----- 
CREATE TABLE IF NOT EXISTS `turbodb`.`category` (
     `categoryid` INT NOT NULL AUTO_INCREMENT , 
     `categoryname` VARCHAR(25) NOT NULL , 
     PRIMARY KEY (`categoryid`)
     ) ENGINE = InnoDB;

    ----- Cars Table -----
CREATE TABLE IF NOT EXISTS `turbodb`.`cars` (
    `carid` INT NOT NULL AUTO_INCREMENT ,
    `category` INT NOT NULL , --Foreign key--
    `carname` VARCHAR(25) NOT NULL ,
    `model` VARCHAR(30) NOT NULL ,
    `mileage` INT NOT NULL ,
    `cartype` VARCHAR(25) NOT NULL ,
    `seats` INT NOT NULL ,
    `luggage` INT NOT NULL ,
    `descripton` TEXT NOT NULL ,
    `fuel` VARCHAR(25) NOT NULL ,
    `transmission` BOOLEAN NOT NULL ,
    `price` DOUBLE NOT NULL ,
    PRIMARY KEY (`carid`)
    ) ENGINE = InnoDB;

    ----- User Table -----
CREATE TABLE IF NOT EXISTS `turbodb`.`user` (
    `userid` INT NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(50) NOT NULL ,
    `username` VARCHAR(50) NOT NULL ,
    `email` VARCHAR(254) NOT NULL ,
    `password` VARCHAR(60) NOT NULL ,
    `phone_number` INT NOT NULL ,
    PRIMARY KEY (`userid`)
    ) ENGINE = InnoDB;


    ----- Review Table -----
CREATE TABLE IF NOT EXISTS `turbodb`.`reviews` (
    `reviewid` INT NOT NULL AUTO_INCREMENT ,
    `carid` INT NOT NULL , --Foreign key--
    `userid` INT NOT NULL , --Foreign key--
    `rating` INT NOT NULL ,
    `review` TEXT NOT NULL ,
    `date` DATE NOT NULL ,
    PRIMARY KEY (`reviewid`)
    ) ENGINE = InnoDB;

    ----- Payment Details Table -----
CREATE TABLE IF NOT EXISTS `turbodb`.`paymentdetails` (
    `paymentid` INT NOT NULL AUTO_INCREMENT,
    `cc_number` INT NOT NULL,
    `cc_expiry` DATE NOT NULL,
    `cc_name` VARCHAR(100) NOT NULL,
    `cc_code` INT NOT NULL,
    `userid` INT NOT NULL,
    `address` VARCHAR(70) NOT NULL ,--Foreign key--
    `phone` INT NOT NULL ,
    PRIMARY KEY (`paymentid`)
    ) ENGINE = InnoDB;


    ----- Booking Details Table -----
CREATE TABLE IF NOT EXISTS `turbodb`.`booking` (
    `bookingid` INT NOT NULL AUTO_INCREMENT,
    `userid` INT NOT NULL,
    `carid` INT NOT NULL,
    `checkin` DATE NOT NULL,
    `checkout` INT NOT NULL,
    `price` FLOAT NOT NULL,
    PRIMARY KEY (`bookingid`)
    ) ENGINE = InnoDB;




ALTER TABLE `turbodb`.`cars` ADD CONSTRAINT `catergory_car` FOREIGN KEY (`category`) REFERENCES `category`(`categoryid`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `turbodb`.`paymentdetails` ADD CONSTRAINT `user_payment` FOREIGN KEY (`userid`) REFERENCES `user`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `turbodb`.`reviews` ADD CONSTRAINT `user_review` FOREIGN KEY (`userid`) REFERENCES `user`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE; 
ALTER TABLE `turbodb`.`reviews` ADD CONSTRAINT `car_review` FOREIGN KEY (`carid`) REFERENCES `cars`(`carid`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `turbodb`.`booking` ADD CONSTRAINT `user_booking` FOREIGN KEY (`userid`) REFERENCES `user`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE; 
ALTER TABLE `turbodb`.`booking` ADD CONSTRAINT `car_booking` FOREIGN KEY (`carid`) REFERENCES `cars`(`carid`) ON DELETE CASCADE ON UPDATE CASCADE;