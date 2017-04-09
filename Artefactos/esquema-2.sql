DROP TABLE IF EXISTS `groups`;

#
# Table structure for table 'groups'
#

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table 'groups'
#

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
     (1,'admin','Administrator'),
     (2,'members','General User');



DROP TABLE IF EXISTS `users`;

#
# Table structure for table 'users'
#

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `codigo_postal` int(10) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `asistencia` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


#
# Dumping data for table 'users'
#

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
     ('1','127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,'1268889823','1268889823','1', 'Admin','istrator','ADMIN','0');


DROP TABLE IF EXISTS `users_groups`;

#
# Table structure for table 'users_groups'
#

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
     (1,1,1),
     (2,1,2);


DROP TABLE IF EXISTS `login_attempts`;

#
# Table structure for table 'login_attempts'
#

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `producto`;

#
# Table structure for table 'producto'
#

CREATE TABLE `producto` (
  `tipo` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `numero_pieza` int(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`tipo`)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `administra`;

#
# Table structure for table 'administra'
#

CREATE TABLE `administra` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `producto_tipo` varchar(25) NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_administra_groups` (`group_id`),
  KEY `fk_administra_producto` (`producto_tipo`),
  CONSTRAINT `groups_producto` UNIQUE (`group_id`, `producto_tipo`),
  CONSTRAINT `fk_administra_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_administra_producto` FOREIGN KEY (`producto_tipo`) REFERENCES `producto` (`tipo`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `proveedor`;

#
# Table structure for table 'proveedor'
#

CREATE TABLE `proveedor` (
  `nombre` varchar(50) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `numero_telefonico` int(20) NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `provee`;

#
# Table structure for table 'provee'
#

CREATE TABLE `provee` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `producto_tipo` varchar(25) NOT NULL,
  `proveedor_nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_provee_producto` (`producto_tipo`),
  KEY `fk_provee_proveedor` (`proveedor_nombre`),
  CONSTRAINT `producto_proveedor` UNIQUE (`producto_tipo`, `proveedor_nombre`),
  CONSTRAINT `fk_provee_producto` FOREIGN KEY (`producto_tipo`) REFERENCES `producto` (`tipo`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_provee_proveedor` FOREIGN KEY (`proveedor_nombre`) REFERENCES `proveedor` (`nombre`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `platillo`;

#
# Table structure for table 'platillo'
#

CREATE TABLE `platillo` (
  `tipo` varchar(25) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `presio` float(20) NOT NULL,
  `ingresientes` varchar(150) NOT NULL,
  `tiempo_preparacion` time NOT NULL,
  PRIMARY KEY (`tipo`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `actualiza`;

#
# Table structure for table 'actualiza'
#

CREATE TABLE `actualiza` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `platillo_tipo` varchar(25) NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_actualiza_groups` (`group_id`),
  KEY `fk_actualiza_platillo` (`platillo_tipo`),
  CONSTRAINT `groups_platillo` UNIQUE (`group_id`, `platillo_tipo`),
  CONSTRAINT `fk_actualiza_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_actualiza_platillo` FOREIGN KEY (`platillo_tipo`) REFERENCES `platillo` (`tipo`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `orden`;

#
# Table structure for table 'orden'
#

CREATE TABLE `orden` (
  `numero_orden` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hora` time NOT NULL,
   `group_id` mediumint(8) unsigned NOT NULL,
   `platillo_tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`numero_orden`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `registrar_orden`;

#
# Table structure for table 'regitrar_orden'
#

CREATE TABLE `registrar_orden` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `numero_orden` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_registra_groups` (`group_id`),
  KEY `fk_registra_orden` (`numero_orden`),
  CONSTRAINT `registrar_orden` UNIQUE (`numero_orden`, `group_id`),
   CONSTRAINT `fk_registar_groups` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_registrar_orden` FOREIGN KEY (`numero_orden`) REFERENCES `orden` (`numero_orden`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `orden_tiene_platillo`;

#
# Table structure for table 'orden_tiene_platillo'
#

CREATE TABLE `orden_tiene_platillo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `numero_orden` int(11) unsigned NOT NULL,
  `platillo_tipo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orden` (`numero_orden`),
  KEY `fk_platillo` (`platillo_tipo`),
  CONSTRAINT `orden_tiene_platillo` UNIQUE (`numero_orden`, `platillo_tipo`),
  CONSTRAINT `fk_orden` FOREIGN KEY (`numero_orden`) REFERENCES `orden` (`numero_orden`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_platillo` FOREIGN KEY (`platillo_tipo`) REFERENCES `platillo` (`tipo`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `cliente`;

#
# Table structure for table 'cliente'
#

CREATE TABLE `cliente` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	
DROP TABLE IF EXISTS `reservacion`;

#
# Table structure for table 'reservacion'
#

CREATE TABLE `reservacion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `numero_persona` int(20) NOT NULL,
  `fecha` DATE NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8



DROP TABLE IF EXISTS `cliente_realiza_reservacion`;

#
# Table structure for table 'orden_tiene_platillo'
#

CREATE TABLE `cliente_realiza_reservacion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) unsigned NOT NULL,
  `reservacion_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cliente` (`cliente_id`),
  KEY `fk_reservacion` (`reservacion_id`),
  CONSTRAINT `cliente_realiza_reservacion` UNIQUE (`cliente_id`, `reservacion_id`),
  CONSTRAINT `fk_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_reservacion` FOREIGN KEY (`reservacion_id`) REFERENCES `reservacion` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `cliente_ordena_orden`;

#
# Table structure for table 'orden_tiene_platillo'
#

CREATE TABLE `cliente_ordena_orden` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) unsigned NOT NULL,
  `orden_numero` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ordena_cliente` (`cliente_id`),
  KEY `fk_ordena_orden` (`orden_numero`),
  CONSTRAINT `cliente_orden` UNIQUE (`cliente_id`, `orden_numero`),
  CONSTRAINT `fk_ordena_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordena_orden` FOREIGN KEY (`orden_numero`) REFERENCES `orden` (`numero_orden`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `ticket`;

#
# Table structure for table 'reservacion'
#

CREATE TABLE `ticket` (
  `folio` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_pago` varchar(10) NOT NULL,
  `fecha` DATE NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `orden_tiene_ticket`;

#
# Table structure for table 'orden_tiene_ticket'
#

CREATE TABLE `orden_tiene_ticket` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `numero_orden` int(11) unsigned NOT NULL,
  `folio_ticket` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tiene_orden` (`numero_orden`),
  KEY `fk_tiene_folio` (`folio_ticket`),
  CONSTRAINT `orden_tiene_ticket` UNIQUE (`numero_orden`, `folio_ticket`),
  CONSTRAINT `fk_tien_orden` FOREIGN KEY (`numero_orden`) REFERENCES `orden` (`numero_orden`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_tien_folio` FOREIGN KEY (`folio_ticket`) REFERENCES `ticket` (`folio`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `cliente_paga_ticket`;

#
# Table structure for table 'cliente_paga_ticket'
#

CREATE TABLE `cliente_paga_ticket` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` int(11) unsigned NOT NULL,
  `folio_ticket` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_paga_cliente` (`cliente_id`),
  KEY `fk_paga_ticket` (`folio_ticket`),
  CONSTRAINT `cliente_paga` UNIQUE (`cliente_id`, `folio_ticket`),
  CONSTRAINT `fk_paga_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_paga_ticket` FOREIGN KEY (`folio_ticket`) REFERENCES `ticket` (`folio`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;