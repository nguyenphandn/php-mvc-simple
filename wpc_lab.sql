CREATE TABLE user (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` int default 0,
  PRIMARY KEY (id)
);

CREATE TABLE product (
  `id` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (id)
);

-- Dumping data
-- Hashed password:
-- Aa123456
-- Aa234567
-- Aa345678
-- Aa456789
INSERT INTO user (`username`, `password`) VALUES
('userone@gmail.com', 'c4318372f98f4c46ed3a32c16ee4d7a76c832886d887631c0294b3314f34edf1'),
('usertwo@gmail.com', '46fa7dba4bf0bb3a3256a46b9f17514c71b9016adfa308a38dbbe81be8d10aea'),
('userthree@gmail.com', '889350bfa7f4b20e63a399d421af48ec064dd9a8dd79f1d76d48805d85e242bb'),
('userfour@gmail.com', 'b43e68e6a4b4a05de5f90467309e6dcc11adb27270f1420df875001d38dd4c1a');

INSERT INTO product (`pname`, `description`) VALUES
('car 1', 'This is car 1.'),
('car 2', 'This is car 2.'),
('car 3', 'This is car 3.'),
('dog 1', 'Dog 1 says woof woof.'),
('dog 2', 'Dog 2 says woof woof.'),
('cate 0', 'Cate 0 says meow meow.');