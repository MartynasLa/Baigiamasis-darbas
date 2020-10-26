CREATE DATABASE projektas1;

-- //============stock1 duombaze============///
CREATE TABLE stock1(
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    name  VARCHAR(60),
    description text,
    price varchar(60),
    imageName  VARCHAR(60),
    amount varchar(25)
);

INSERT INTO stock1 VALUES (null, "Black Hoodie", "Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.", 55.00, "juodasSK.jpg", 1);
INSERT INTO stock1 VALUES (null, "Brown Turtle Neck Jumper", "Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it. Unique clothe for Unique people", 50.00, "rudasBK.jpg", 1);
INSERT INTO stock1 VALUES (null, "Brown Hoodie", "Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.", 55.00, "rudasSK.jpg", 1);
INSERT INTO stock1 VALUES (null, "Black Turtle Neck Jumper", "Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.", 50.00,"juodasBK.jpg", 1);
INSERT INTO stock1 VALUES (null, "test", "Hoodie Jumper from 2187MARS, with convenient front pocket to have your phone or wallet or what ever you want there. It is Unisex therefore everyone can wear it.", 50.00,"juodasBK.jpg", 1);


-- //========image duombaze======//

CREATE TABLE image(
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    imageName  VARCHAR(60),
    description text,
    item_id int(6)
);

INSERT INTO image VALUES (null, "juodasSK.jpg", "black hoodie", 1);
INSERT INTO image VALUES (null, "rudasBK.jpg", "brown turtle", 2);
INSERT INTO image VALUES (null, "juodasBK.jpg", "black turtle", 3);
INSERT INTO image VALUES (null, "rudasSK.jpg", "brown hoodie", 4);

-- Paklausti kaip daryti viska su nuotraukosmis

-- //================about duombaze==============//

CREATE TABLE about(
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    headline  VARCHAR(60),
    content text,
    position int(6),
    showInfo boolean
);

INSERT INTO about VALUES (null, "How 2187MARS Came to Planet Earth", "Once upon a time, me the 'Creator' was watching the movie called Martian, staring Matt Damon. I thought to myself, that the space suits that they were wearing were really convenient, there were many usefull pockets to carrie gadgets ot other things. Also it helped to save main characters life. So it means that space suit was Awesome. Then i started to think about my self then i was a child. I remember that i had a dream of becoming an astronaut, and conquering the stars. Then another idea came that were many kids who had simillar dreams. And that moment i've decided to make clothes with resemblance to space suit. Not all of us can be astronaut or wear real space suit, but all of us can wear 2187MARS clothes, and be a Martian on planet Earth.", 1, 1);

-- //==========contacts DB==========

CREATE TABLE contact(
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    name  VARCHAR(60),
    lname varchar(60),
    content text,
    email varchar(60)
);

-- //==================creater ORDER DB==========//

CREATE TABLE contactOrder(
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    itemName  VARCHAR(60),
    price  VARCHAR(60),
    fullName varchar(100),
    fullAdrress varchar(60),
    email varchar(60),
    orderNr varchar(60),
    content text
);

-- //==========orders DB neveikianti==========

CREATE TABLE orders(
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    name  VARCHAR(60),
    lname varchar(60),
    email varchar(60),
    country varchar(60),
    city varchar (60),
    fullAdrress text,
    postCode varchar (60),
    orderNr varchar (60),
    content text,
    order_id INT(6)
);

-- ========================orders1 DB veikiant=================//

CREATE TABLE orders1(
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    itemName  VARCHAR(60),
    price  VARCHAR(60),
    fullName varchar(100),
    fullAdrress varchar(60),
    email varchar(60),
    orderNr varchar(60),
    content text

);



-- //==========karusele DB==========


CREATE TABLE karusele(
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    imageName  VARCHAR(60)
);

INSERT INTO karusele VALUES (null, "karusele1.jpg");
INSERT INTO karusele VALUES (null, "karusele2.jpg");
INSERT INTO karusele VALUES (null, "karusele3.jpg");
INSERT INTO karusele VALUES (null, "karusele4.jpg");
INSERT INTO karusele VALUES (null, "karusele5.jpg");
INSERT INTO karusele VALUES (null, "karusele6.jpg");


-- ======================galerijos DB======================

CREATE TABLE gallery (
    id INT(6)   AUTO_INCREMENT    PRIMARY KEY,
    imageName  VARCHAR(60)
);

INSERT INTO gallery VALUES (null, "galerija1.jpg");
INSERT INTO gallery VALUES (null, "galerija2.jpg");
INSERT INTO gallery VALUES (null, "galerija3.jpg");
INSERT INTO gallery VALUES (null, "galerija4.jpg");
INSERT INTO gallery VALUES (null, "galerija5.jpg");
INSERT INTO gallery VALUES (null, "galerija6.jpg");
INSERT INTO gallery VALUES (null, "galerija7.jpg");
INSERT INTO gallery VALUES (null, "galerija8.jpg");
INSERT INTO gallery VALUES (null, "galerija9.jpg");
INSERT INTO gallery VALUES (null, "galerija10.jpg");
INSERT INTO gallery VALUES (null, "galerija11.jpg");

-- ================Login DB================

CREATE TABLE user (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  active tinyint(1) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY username (username)
);
