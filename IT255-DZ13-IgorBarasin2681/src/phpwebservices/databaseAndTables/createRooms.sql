CREATE TABLE IF NOT EXISTS `rooms` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`roomname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
`tv` int(11) DEFAULT NULL,
`beds` int(11) DEFAULT NULL,
`room_type_id` int(11) DEFAULT NULL,
PRIMARY KEY (`id`),
KEY `FK_rooms_room_type` (`room_type_id`),
CONSTRAINT `FK_rooms_room_type` FOREIGN KEY (`room_type_id`) REFERENCES
`room_type` (`id`)
)