
CREATE DATABASE IF NOT EXISTS `turbodb`;

CREATE TABLE IF NOT EXISTS `turbodb`.`category` (
     `categoryid` INT NOT NULL AUTO_INCREMENT ,
     `categoryname` VARCHAR(25) NOT NULL ,
     PRIMARY KEY (`categoryid`)
     ) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `turbodb`.`cars` (
    `carid` INT NOT NULL AUTO_INCREMENT ,
    `category` INT NOT NULL ,
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
    `picture` VARCHAR(100) 
    PRIMARY KEY (`carid`)
    ) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `turbodb`.`user` (
    `userid` INT NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(50) NOT NULL ,
    `username` VARCHAR(50) NOT NULL ,
    `email` VARCHAR(254) NOT NULL ,
    `password` VARCHAR(60) NOT NULL ,
    `phone_number` INT NOT NULL ,
    PRIMARY KEY (`userid`)
    ) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `turbodb`.`reviews` (
    `reviewid` INT NOT NULL AUTO_INCREMENT ,
    `carid` INT NOT NULL ,
    `userid` INT NOT NULL ,
    `rating` INT NOT NULL ,
    `review` TEXT NOT NULL ,
    `date` DATETIME NOT NULL ,
    PRIMARY KEY (`reviewid`)
    ) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `turbodb`.`paymentdetails` (
    `paymentid` INT NOT NULL AUTO_INCREMENT,
    `cc_number` INT NOT NULL,
    `cc_expiry` DATE NOT NULL,
    `cc_name` VARCHAR(100) NOT NULL,
    `cc_code` INT NOT NULL,
    `userid` INT NOT NULL,
    `address` VARCHAR(70) NOT NULL ,
    `phone` INT NOT NULL ,
    PRIMARY KEY (`paymentid`)
    ) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS `turbodb`.`booking` (
    `bookingid` INT NOT NULL AUTO_INCREMENT,
    `userid` INT NOT NULL,
    `carid` INT NOT NULL,
    `checkin` DATE NOT NULL,
    `checkout` DATE NOT NULL,
    `price` FLOAT NOT NULL,
    `addons` json NOT NULL,
    `days` INT NOT NULL
    PRIMARY KEY (`bookingid`)
    ) ENGINE = InnoDB;




ALTER TABLE `turbodb`.`cars` ADD CONSTRAINT `catergory_car` FOREIGN KEY (`category`) REFERENCES `category`(`categoryid`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `turbodb`.`paymentdetails` ADD CONSTRAINT `user_payment` FOREIGN KEY (`userid`) REFERENCES `user`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `turbodb`.`reviews` ADD CONSTRAINT `user_review` FOREIGN KEY (`userid`) REFERENCES `user`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `turbodb`.`reviews` ADD CONSTRAINT `car_review` FOREIGN KEY (`carid`) REFERENCES `cars`(`carid`) ON DELETE CASCADE ON UPDATE CASCADE;


ALTER TABLE `turbodb`.`booking` ADD CONSTRAINT `user_booking` FOREIGN KEY (`userid`) REFERENCES `user`(`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `turbodb`.`booking` ADD CONSTRAINT `car_booking` FOREIGN KEY (`carid`) REFERENCES `cars`(`carid`) ON DELETE CASCADE ON UPDATE CASCADE;



INSERT INTO `turbodb`.`category` (`categoryname`) VALUES ('Electric');
INSERT INTO `turbodb`.`category` (`categoryname`) VALUES ('Sedan');
INSERT INTO `turbodb`.`category` (`categoryname`) VALUES ('SUV');
INSERT INTO `turbodb`.`category` (`categoryname`) VALUES ('Sports');
INSERT INTO `turbodb`.`category` (`categoryname`) VALUES ('Luxury');


INSERT INTO `turbodb`.`cars`  (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (1,'Tesla Model X','2021','90000','Premium','7','6','With the most power and quickest acceleration of any SUV, Model X Plaid is the highest performing SUV ever built. All Model X powertrains, with updated battery architecture, can deliver instant torque at any speed.','Electric','1','45.00');

INSERT INTO `turbodb`.`cars` (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (2,'Toyota Corolla','2020','140000','Economy','5','4','With an excellent fuel economy, boasting an EPA-estimated 31 cities and 40 highway mpg rating, the standard Toyota Safety Sense™ 2.0 package and much more, the 2020 Toyota Corolla is prepared to give every driver a smooth, modern and exciting experience.','Petrol','1','18.00');

INSERT INTO `turbodb`.`cars` (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (2,'Hyundai Elentra','2019','80000','Economy','5','3','The Hyundai Elantra is a four-door sedan with five seats. The front seats are supportive and decently cushioned, and there''s sufficient headroom and legroom for taller occupants. It''s easy to find a comfy driving position, thanks to the range of seat and steering wheel adjustments.','Petrol','1','19.00');

INSERT INTO `turbodb`.`cars` (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (3,'Jeep Wrangler','2018','100000','Premium','5','4','It''s not the most spacious or accommodating SUV available, but the Wrangler provides a seamless blend of vintage and modern Jeep character. A commanding view of the road or trail makes for easy maneuverability, but the view rearward is obscured by thick roof pillars, roll bars, and various grab handles. Need a better view? Just pop the top and remove the doors.','Petrol','1','35');

INSERT INTO `turbodb`.`cars` (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (3,'Honda C-RV','2018','210000','Premium','7','5','The Honda CR-V is a brilliant small SUV due to its high competency across the board. It has exceptional storage space and functionality, plenty of features, a comfortable ride and enjoyable performance. And all of that comes at a competitive price for the class.','Petrol','1','25');

INSERT INTO `turbodb`.`cars` (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (4,'Ford GT 500','2021','80000','Premium','4','4','The 2021 Ford Shelby GT500 is an ultra-high-performance variant of the standard Ford Mustang. Under the hood is a 5.2-liter supercharged V8 (760 horsepower, 625 lb-ft) that is connected to a seven-speed dual-clutch automatic transmission driving the rear wheels.','Petrol','0','29.00');

INSERT INTO `turbodb`.`cars` (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (4,'Porsche Cayenne','2020','120000','Premium','5','4','The Porsche Cayenne is a series of mid-size luxury crossover sport utility vehicles manufactured by the German automaker Porsche since 2002, with North American sales beginning in 2003. It is the first V8-engined vehicle built by Porsche since 1995, when the Porsche 928 was discontinued.','Petrol','1','48.00');

INSERT INTO `turbodb`.`cars` (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (5,'Bentley','2019','100000','Premium','5','4','Bentley Motors Limited is a British manufacturer and marketer of luxury cars and SUVs, and a subsidiary of the Volkswagen Group since 1998. Headquartered in Crewe, England, the company was founded as Bentley Motors Limited by W. O.','Petrol','1','40.00');

INSERT INTO `turbodb`.`cars` (`category`, `carname`, `model`, `mileage`, `cartype`, `seats`, `luggage`, `descripton`, `fuel`, `transmission`, `price`)
    VALUES (5,'Rolls Royce','2019','124000','Premium','4','2','A unique space, defined by unparalleled comfort. The leather in a Rolls-Royce motor car is unlike any other. It is the finest in the world, giving give our craftspeople the most exquisite material to work with.','Petrol','1','69.00');



UPDATE `turbodb`.`cars` SET `picture` = 'rolls-front-side-view.jpg' WHERE `cars`.`carid` = 9;
UPDATE `turbodb`.`cars` SET `picture` = 'bentley-front-side-view.jpg' WHERE `cars`.`carid` = 8;
UPDATE `turbodb`.`cars` SET `picture` = 'wrangler-front-side-view2.jpg' WHERE `cars`.`carid` = 4;
UPDATE `turbodb`.`cars` SET `picture` = 'ford-front-view.jpg' WHERE `cars`.`carid` = 6;
UPDATE `turbodb`.`cars` SET `picture` = 'crv-front-side-view2.jpg' WHERE `cars`.`carid` = 5;
UPDATE `turbodb`.`cars` SET `picture` = 'elentra-front-side-view.jpg' WHERE `cars`.`carid` = 3;
UPDATE `turbodb`.`cars` SET `picture` = 'porshe-front-side-view.jpg' WHERE `cars`.`carid` = 7;
UPDATE `turbodb`.`cars` SET `picture` = 'corolla-front-side-view.jpg' WHERE `cars`.`carid` = 2;
UPDATE `turbodb`.`cars` SET `picture` = 'tesla-x-main-view.jpg' WHERE `cars`.`carid` = 1;