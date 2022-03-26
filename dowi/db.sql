CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0'
) ;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `number` varchar(255) NOT NULL
);
CREATE TABLE `event` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `date` text NOT NULL,
  `price` text NOT NULL,
  `hours` text NOT NULL,
  `place` text NOT NULL,
  `band` text NOT NULL,
  `volunteer` text NOT NULL
);


CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL
)