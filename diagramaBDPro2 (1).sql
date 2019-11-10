CREATE TABLE `users` (
  `name` varchar(255),
  `last_name` varchar(255),
  `birthdate` date,
  `photo` varchar(255),
  `email` varchar(255),
  `username` varchar(255) PRIMARY KEY,
  `password` varchar(255),
  `id_account` int
);

CREATE TABLE `user_types` (
  `id` int,
  `name` varchar(255)
);

CREATE TABLE `usersXTypes` (
  `username` varchar(255),
  `type_id` int
);

CREATE TABLE `accounts` (
  `id` int PRIMARY KEY,
  `name` varchar(255)
);

CREATE TABLE `events` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_user` int,
  `name` varchar(255),
  `privacy` varchar(255),
  `description` varchar(255),
  `date` date,
  `location` varchar(255),
  `status` varchar(255)
);

CREATE TABLE `event_photos` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `url` varchar(255),
  `id_event` int
);

CREATE TABLE `comments` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `content` varchar(255),
  `photo` varchar(255),
  `id_user` varchar(255),
  `id_event` int,
  `continent_name` varchar(255)
);

CREATE TABLE `category` (
  `id` int PRIMARY KEY,
  `name` varchar(255),
  `status` varchar(255)
);

CREATE TABLE `categoryXEvent` (
  `id_event` int,
  `id_category` int
);

CREATE TABLE `favCategory` (
  `id_category` varchar(255),
  `id_user` varchar(255)
);

CREATE TABLE `replies` (
  `id_user` varchar(255),
  `id_event` int,
  `type` varchar(255)
);

CREATE TABLE `invites` (
  `id_user` varchar(255),
  `id_event` int
);

CREATE TABLE `atendees` (
  `id_user` varchar(255),
  `id_event` int
);

ALTER TABLE `users` ADD FOREIGN KEY (`id_account`) REFERENCES `accounts` (`id`);

ALTER TABLE `usersXTypes` ADD FOREIGN KEY (`username`) REFERENCES `users` (`username`);

ALTER TABLE `usersXTypes` ADD FOREIGN KEY (`type_id`) REFERENCES `user_types` (`id`);

ALTER TABLE `events` ADD FOREIGN KEY (`id_user`) REFERENCES `users` (`username`);

ALTER TABLE `event_photos` ADD FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);

ALTER TABLE `comments` ADD FOREIGN KEY (`id_user`) REFERENCES `users` (`username`);

ALTER TABLE `comments` ADD FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);

ALTER TABLE `categoryXEvent` ADD FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);

ALTER TABLE `categoryXEvent` ADD FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

ALTER TABLE `favCategory` ADD FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

ALTER TABLE `favCategory` ADD FOREIGN KEY (`id_user`) REFERENCES `users` (`username`);

ALTER TABLE `replies` ADD FOREIGN KEY (`id_user`) REFERENCES `users` (`username`);

ALTER TABLE `replies` ADD FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);

ALTER TABLE `invites` ADD FOREIGN KEY (`id_user`) REFERENCES `users` (`username`);

ALTER TABLE `invites` ADD FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);

ALTER TABLE `atendees` ADD FOREIGN KEY (`id_user`) REFERENCES `users` (`username`);

ALTER TABLE `atendees` ADD FOREIGN KEY (`id_event`) REFERENCES `events` (`id`);
