CREATE TABLE `product_category` (
  `product_category_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`product_category_id`));

CREATE TABLE `postage_type` (
  `postage_type_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `price` DECIMAL NOT NULL DEFAULT 0,
  PRIMARY KEY (`postage_type_id`));

CREATE TABLE `product` (
  `product_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(500) NOT NULL,
  `description` VARCHAR(2000) NOT NULL,
  `price` DECIMAL NOT NULL DEFAULT 0,
  `category_id` INT NULL,
  PRIMARY KEY (`product_id`),
  INDEX `fk_product_product_category_idx` (`category_id` ASC) VISIBLE,
  CONSTRAINT `fk_product_product_category`
    FOREIGN KEY (`category_id`)
    REFERENCES `product_category` (`product_category_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `customer` (
  `customer_id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(60) NOT NULL,
  `last_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(500) NOT NULL,
  `phone_number` VARCHAR(45) NULL,
  `billing_address` VARCHAR(500) NULL,
  `billing_postcode` VARCHAR(45) NULL,
  `shipping_address` VARCHAR(500) NULL,
  `shipping_postcode` VARCHAR(45) NULL,
  PRIMARY KEY (`customer_id`));

CREATE TABLE `order_status` (
  `order_status_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`order_status_id`));

CREATE TABLE `shipment_status` (
  `shipment_status_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`shipment_status_id`));

CREATE TABLE `orders` (
  `order_id` INT NOT NULL AUTO_INCREMENT,
  `customer_id` INT NOT NULL,
  `order_status_id` INT NOT NULL,
  `order_date` DATETIME NOT NULL,
  `shipping_address` varchar(500) NOT NULL,
  `shipping_postcode` varchar(45) NOT NULL,
  PRIMARY KEY (`order_id`),
  INDEX `fk_order_customer_idx` (`customer_id` ASC) VISIBLE,
  INDEX `fk_order_order_status_idx` (`order_status_id` ASC) VISIBLE,
  CONSTRAINT `fk_order_customer`
    FOREIGN KEY (`customer_id`)
    REFERENCES `customer` (`customer_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_order_status`
    FOREIGN KEY (`order_status_id`)
    REFERENCES `order_status` (`order_status_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `shipment` (
  `shipment_id` INT NOT NULL AUTO_INCREMENT,
  `order_id` INT NOT NULL,
  `date_shipped` DATETIME NULL,
  `tracking_number` VARCHAR(200) NULL,
  `shipment_status_id` INT NULL,
  `date_delivered` DATETIME NULL,
  PRIMARY KEY (`shipment_id`),
  INDEX `fk_shipment_order_id_idx` (`order_id` ASC) VISIBLE,
  INDEX `fk_shipment_shipment_status_idx` (`shipment_status_id` ASC) VISIBLE,
  CONSTRAINT `fk_shipment_order`
    FOREIGN KEY (`order_id`)
    REFERENCES `orders` (`order_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_shipment_shipment_status`
    FOREIGN KEY (`shipment_status_id`)
    REFERENCES `shipment_status` (`shipment_status_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

CREATE TABLE `order_item` (
  `order_item_id` INT NOT NULL AUTO_INCREMENT,
  `order_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `quantity` INT NOT NULL,
  PRIMARY KEY (`order_item_id`),
  INDEX `fk_order_item_order_idx` (`order_id` ASC) VISIBLE,
  INDEX `fk_order_item_product_idx` (`product_id` ASC) VISIBLE,
  CONSTRAINT `fk_order_item_order`
    FOREIGN KEY (`order_id`)
    REFERENCES `orders` (`order_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_item_product`
    FOREIGN KEY (`product_id`)
    REFERENCES `product` (`product_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

ALTER TABLE `9hPnX4LoJo`.`orders` 
ADD COLUMN `postage_type_id` INT NOT NULL AFTER `shipping_postcode`,
ADD INDEX `fk_order_postage_type_idx` (`postage_type_id` ASC) VISIBLE;

ALTER TABLE `9hPnX4LoJo`.`orders` 
ADD CONSTRAINT `fk_order_postage_type`
  FOREIGN KEY (`postage_type_id`)
  REFERENCES `9hPnX4LoJo`.`postage_type` (`postage_type_id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `9hPnX4LoJo`.`customer` 
ADD COLUMN `card_number` VARCHAR(100) NULL AFTER `shipping_postcode`,
ADD COLUMN `card_name` VARCHAR(100) NULL AFTER `card_number`,
ADD COLUMN `expiry_date` VARCHAR(45) NULL AFTER `card_name`;

ALTER TABLE `9hPnX4LoJo`.`customer` 
CHANGE COLUMN `shipping_address` `delivery_address` VARCHAR(500) NULL DEFAULT NULL ,
CHANGE COLUMN `shipping_postcode` `delivery_postcode` VARCHAR(45) NULL DEFAULT NULL ;

ALTER TABLE `9hPnX4LoJo`.`customer` 
ADD COLUMN `title` VARCHAR(45) NULL AFTER `expiry_date`;

ALTER TABLE `9hPnX4LoJo`.`customer` 
ADD COLUMN `contact_email` TINYINT NULL AFTER `title`,
ADD COLUMN `contact_post` TINYINT NULL AFTER `contact_email`,
ADD COLUMN `contact_sms` TINYINT NULL AFTER `contact_post`;

ALTER TABLE `9hPnX4LoJo`.`orders` 
ADD COLUMN `order_total` DECIMAL(10,2) NULL AFTER `postage_type_id`;
