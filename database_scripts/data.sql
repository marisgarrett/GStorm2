/*
    Products Categories
*/
INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('1', 'Xbox - Consoles');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('2', 'Xbox - Games');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('3', 'Xbox - Accessories');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('4', 'Playstation - Consoles');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('5', 'Playstation - Games');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('6', 'Playstation - Accessories');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('7', 'PC - Consoles');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('8', 'PC - Games');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('9', 'PC - Accessories');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('10', 'Nintendo - Consoles');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('11', 'Nintendo - Games');

INSERT INTO `product_category` (`product_category_id`, `name`) VALUES ('12', 'Nintendo - Accessories');

/*
    Products Data
*/
INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `category_id`, `is_featured`) VALUES ('1', 'PS4', 'A playstation 4 console', '229.85', '4', '1');

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `category_id`, `is_featured`) VALUES ('2', 'PS4 Pro', 'A PS4 pro', '339.85', '4', '1');

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `category_id`, `is_featured`) VALUES ('3', 'God of War', 'God of war game', '49.95', '5', '0');