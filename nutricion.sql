/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 80030
Source Host           : localhost:3306
Source Database       : nutricion

Target Server Type    : MYSQL
Target Server Version : 80030
File Encoding         : 65001

Date: 2023-07-24 10:51:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `Id_Categoria` int NOT NULL AUTO_INCREMENT,
  `Nombre_Categoria` varchar(80) NOT NULL,
  `Foto_Categoria` varchar(300) NOT NULL,
  `Estado_Categoria` int NOT NULL,
  PRIMARY KEY (`Id_Categoria`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('11', 'Vegetales', '', '1');
INSERT INTO `categorias` VALUES ('12', 'bebidas', '', '1');
INSERT INTO `categorias` VALUES ('13', 'Pastas', '', '1');

-- ----------------------------
-- Table structure for empresas
-- ----------------------------
DROP TABLE IF EXISTS `empresas`;
CREATE TABLE `empresas` (
  `Id_Empresa` int NOT NULL AUTO_INCREMENT,
  `Rut_Empresa` varchar(50) DEFAULT NULL,
  `Nombre_Empresa` varchar(50) DEFAULT NULL,
  `Fecha_Empresa` date DEFAULT NULL,
  `Cantidad_Trabajadores` int DEFAULT NULL,
  `Encargado_Empresa` varchar(50) DEFAULT NULL,
  `Fono_Empresa` int DEFAULT NULL,
  `Contrato_Empresa` int DEFAULT NULL,
  PRIMARY KEY (`Id_Empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of empresas
-- ----------------------------
INSERT INTO `empresas` VALUES ('1', '2-2', 'Food Chile', '2023-04-23', '20', 'karina', '5555', '56656');

-- ----------------------------
-- Table structure for historial
-- ----------------------------
DROP TABLE IF EXISTS `historial`;
CREATE TABLE `historial` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `ActividadFisica` varchar(50) DEFAULT NULL,
  `Peso` varchar(50) DEFAULT NULL,
  `Talla` varchar(50) DEFAULT NULL,
  `IMC` varchar(50) DEFAULT NULL,
  `CCintura` varchar(50) DEFAULT NULL,
  `PresArterial` varchar(50) DEFAULT NULL,
  `Vitaminas` varchar(50) DEFAULT NULL,
  `Minerales` varchar(50) DEFAULT NULL,
  `Anamnesis` varchar(1200) DEFAULT NULL,
  `Habitos` varchar(1200) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Usuario` int DEFAULT NULL,
  `Paciente` int DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of historial
-- ----------------------------
INSERT INTO `historial` VALUES ('1', 'SI', '75', '45', '45', '45', '45', 'sfsfd', 'sfd', 'el paciente se ve flaco pero es gordo, tiene grasa pero se le ven calugas', 'es mas sano que un yogurt natural sin azucares', '2023-04-23', '1', '1');
INSERT INTO `historial` VALUES ('2', 'NO', '75', '45', '45', '45', '45', 'sfsfd', 'sfd', 'el paciente se ve flaco pero es gordo, tiene grasa pero se le ven calugas', 'es mas sano que un yogurt natural sin azucares', '2023-04-23', '1', '1');
INSERT INTO `historial` VALUES ('3', 'SI', '65', '65', '65', '65', '345', 'gdf', 'dgdf', 'gdf', 'gdfg', '2023-04-23', '1', '1');
INSERT INTO `historial` VALUES ('4', 'SI', '65', '65', '65', '65', '345', 'gdf', 'dgdf', 'gdf', 'gdfg', '2023-04-23', '1', '1');
INSERT INTO `historial` VALUES ('5', 'SI', '65', '65', '65', '65', '345', 'gdf', 'dgdf', 'gdf', 'gdfg', '2023-04-23', '1', '1');
INSERT INTO `historial` VALUES ('6', 'SI', '45', 's', '55', '90', '156', 'sin vitaminas', 'alto porcentaje', 'paciente con dieta 3454', 'sin malos habitos', '2023-04-23', '1', '1');
INSERT INTO `historial` VALUES ('7', 'NO', '99', 'xxl', '456', '34', '134', 'asdasd', 'dsadasd', 'asdasd', 'asdad', '2023-04-23', '1', '1');
INSERT INTO `historial` VALUES ('8', 'SI', '234', '234', '234', '243', '243', 'ds', 'dsaa', 'asd', 'asd', '2023-04-23', '1', '1');
INSERT INTO `historial` VALUES ('9', 'SI', 'sdf', 'sdf', 'sfd', 'sdf', '234', 'sdf', 'sdf', 'rdgd', 'sdf', '2023-04-23', '1', '1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `usuario` int DEFAULT NULL,
  `estado` int DEFAULT '1',
  `aprobacion` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Sin Asignacion', '2023-06-16', '1', '1', '1');
INSERT INTO `menu` VALUES ('4', 'men cuatro', '2023-06-18', '1', '1', '1');
INSERT INTO `menu` VALUES ('5', 'deres', '2023-06-18', '1', null, '1');
INSERT INTO `menu` VALUES ('6', 'menu x', '2023-06-23', '1', null, '1');
INSERT INTO `menu` VALUES ('7', 'desayuno x', '2023-06-24', '1', '1', '1');
INSERT INTO `menu` VALUES ('8', 'SandwichJamon 24-5', '2023-06-24', '1', '1', '0');
INSERT INTO `menu` VALUES ('9', 'prueba aprobado', '2023-07-09', '1', '1', '1');

-- ----------------------------
-- Table structure for menu_detalle
-- ----------------------------
DROP TABLE IF EXISTS `menu_detalle`;
CREATE TABLE `menu_detalle` (
  `id_detalle` int NOT NULL AUTO_INCREMENT,
  `id_menu` int DEFAULT NULL,
  `id_producto` int DEFAULT NULL,
  `gramaje` int DEFAULT NULL,
  `carbohidrato` int DEFAULT NULL,
  `calorias` int DEFAULT NULL,
  `proteinas` int DEFAULT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_detalle`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of menu_detalle
-- ----------------------------
INSERT INTO `menu_detalle` VALUES ('1', '1', '21', '100', '100', '100', '100', null);
INSERT INTO `menu_detalle` VALUES ('3', '4', '22', '100', '100', '100', '100', 'nada');
INSERT INTO `menu_detalle` VALUES ('4', '5', '22', '100', '100', '100', '100', 'da');
INSERT INTO `menu_detalle` VALUES ('5', '6', '22', '100', '100', '100', '100', 'sadasd');
INSERT INTO `menu_detalle` VALUES ('6', '6', '21', '100', '100', '100', '100', 'lero lero');
INSERT INTO `menu_detalle` VALUES ('7', '6', '26', '100', '100', '100', '100', 'xd');
INSERT INTO `menu_detalle` VALUES ('8', '7', '22', '100', '100', '100', '100', 'detallito');

-- ----------------------------
-- Table structure for minutaalmuerzo
-- ----------------------------
DROP TABLE IF EXISTS `minutaalmuerzo`;
CREATE TABLE `minutaalmuerzo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `de1` varchar(255) DEFAULT NULL,
  `de2` varchar(255) DEFAULT NULL,
  `de3` varchar(255) DEFAULT NULL,
  `de4` varchar(255) DEFAULT NULL,
  `de5` varchar(255) DEFAULT NULL,
  `de6` varchar(255) DEFAULT NULL,
  `de7` varchar(255) DEFAULT NULL,
  `de8` varchar(255) DEFAULT NULL,
  `de9` varchar(255) DEFAULT '',
  `de10` varchar(255) DEFAULT NULL,
  `de11` varchar(255) DEFAULT NULL,
  `de12` varchar(255) DEFAULT NULL,
  `de13` varchar(255) DEFAULT NULL,
  `de14` varchar(255) DEFAULT NULL,
  `de15` varchar(255) DEFAULT NULL,
  `de16` varchar(255) DEFAULT NULL,
  `de17` varchar(255) DEFAULT NULL,
  `de18` varchar(255) DEFAULT NULL,
  `de19` varchar(255) DEFAULT NULL,
  `de20` varchar(255) DEFAULT NULL,
  `de21` varchar(255) DEFAULT NULL,
  `de22` varchar(255) DEFAULT NULL,
  `de23` varchar(255) DEFAULT NULL,
  `de24` varchar(255) DEFAULT NULL,
  `de25` varchar(255) DEFAULT NULL,
  `de26` varchar(255) DEFAULT NULL,
  `de27` varchar(255) DEFAULT NULL,
  `de28` varchar(255) DEFAULT NULL,
  `de29` varchar(255) DEFAULT NULL,
  `de30` varchar(255) DEFAULT NULL,
  `de31` varchar(255) DEFAULT NULL,
  `de32` varchar(255) DEFAULT NULL,
  `de33` varchar(255) DEFAULT NULL,
  `de34` varchar(255) DEFAULT NULL,
  `de35` varchar(255) DEFAULT NULL,
  `de36` varchar(255) DEFAULT NULL,
  `de37` varchar(255) DEFAULT NULL,
  `de38` varchar(255) DEFAULT NULL,
  `de39` varchar(255) DEFAULT NULL,
  `de40` varchar(255) DEFAULT NULL,
  `de41` varchar(255) DEFAULT NULL,
  `de42` varchar(255) DEFAULT NULL,
  `de43` varchar(255) DEFAULT NULL,
  `de44` varchar(255) DEFAULT NULL,
  `de45` varchar(255) DEFAULT NULL,
  `de46` varchar(255) DEFAULT NULL,
  `de47` varchar(255) DEFAULT NULL,
  `de48` varchar(255) DEFAULT NULL,
  `de49` varchar(255) DEFAULT NULL,
  `de50` varchar(255) DEFAULT NULL,
  `de51` varchar(255) DEFAULT NULL,
  `de52` varchar(255) DEFAULT NULL,
  `de53` varchar(255) DEFAULT NULL,
  `de54` varchar(255) DEFAULT NULL,
  `de55` varchar(255) DEFAULT NULL,
  `de56` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of minutaalmuerzo
-- ----------------------------
INSERT INTO `minutaalmuerzo` VALUES ('1', 'once', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'once', 'o', 'o', 'o', 'o', 'o', 'o', 'oo', 'doce', 'oo', 'o', 'o', 'o', 'o', 'o', 'o', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for minutacena
-- ----------------------------
DROP TABLE IF EXISTS `minutacena`;
CREATE TABLE `minutacena` (
  `id` int NOT NULL AUTO_INCREMENT,
  `de1` varchar(255) DEFAULT NULL,
  `de2` varchar(255) DEFAULT NULL,
  `de3` varchar(255) DEFAULT NULL,
  `de4` varchar(255) DEFAULT NULL,
  `de5` varchar(255) DEFAULT NULL,
  `de6` varchar(255) DEFAULT NULL,
  `de7` varchar(255) DEFAULT NULL,
  `de8` varchar(255) DEFAULT NULL,
  `de9` varchar(255) DEFAULT '',
  `de10` varchar(255) DEFAULT NULL,
  `de11` varchar(255) DEFAULT NULL,
  `de12` varchar(255) DEFAULT NULL,
  `de13` varchar(255) DEFAULT NULL,
  `de14` varchar(255) DEFAULT NULL,
  `de15` varchar(255) DEFAULT NULL,
  `de16` varchar(255) DEFAULT NULL,
  `de17` varchar(255) DEFAULT NULL,
  `de18` varchar(255) DEFAULT NULL,
  `de19` varchar(255) DEFAULT NULL,
  `de20` varchar(255) DEFAULT NULL,
  `de21` varchar(255) DEFAULT NULL,
  `de22` varchar(255) DEFAULT NULL,
  `de23` varchar(255) DEFAULT NULL,
  `de24` varchar(255) DEFAULT NULL,
  `de25` varchar(255) DEFAULT NULL,
  `de26` varchar(255) DEFAULT NULL,
  `de27` varchar(255) DEFAULT NULL,
  `de28` varchar(255) DEFAULT NULL,
  `de29` varchar(255) DEFAULT NULL,
  `de30` varchar(255) DEFAULT NULL,
  `de31` varchar(255) DEFAULT NULL,
  `de32` varchar(255) DEFAULT NULL,
  `de33` varchar(255) DEFAULT NULL,
  `de34` varchar(255) DEFAULT NULL,
  `de35` varchar(255) DEFAULT NULL,
  `de36` varchar(255) DEFAULT NULL,
  `de37` varchar(255) DEFAULT NULL,
  `de38` varchar(255) DEFAULT NULL,
  `de39` varchar(255) DEFAULT NULL,
  `de40` varchar(255) DEFAULT NULL,
  `de41` varchar(255) DEFAULT NULL,
  `de42` varchar(255) DEFAULT NULL,
  `de43` varchar(255) DEFAULT NULL,
  `de44` varchar(255) DEFAULT NULL,
  `de45` varchar(255) DEFAULT NULL,
  `de46` varchar(255) DEFAULT NULL,
  `de47` varchar(255) DEFAULT NULL,
  `de48` varchar(255) DEFAULT NULL,
  `de49` varchar(255) DEFAULT NULL,
  `de50` varchar(255) DEFAULT NULL,
  `de51` varchar(255) DEFAULT NULL,
  `de52` varchar(255) DEFAULT NULL,
  `de53` varchar(255) DEFAULT NULL,
  `de54` varchar(255) DEFAULT NULL,
  `de55` varchar(255) DEFAULT NULL,
  `de56` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of minutacena
-- ----------------------------
INSERT INTO `minutacena` VALUES ('1', 'once', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'once', 'o', 'o', 'o', 'o', 'o', 'o', 'oo', 'doce', 'oo', 'o', 'o', 'o', 'o', 'o', 'o', 'sd', 'sd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ds', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for minutagrande
-- ----------------------------
DROP TABLE IF EXISTS `minutagrande`;
CREATE TABLE `minutagrande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `de1` text,
  `de2` text,
  `de3` text,
  `de4` text,
  `de5` text,
  `de6` text,
  `de7` text,
  `de8` text,
  `de9` text,
  `de10` text,
  `de11` text,
  `de12` text,
  `de13` text,
  `de14` text,
  `de15` text,
  `de16` text,
  `de17` text,
  `de18` text,
  `de19` text,
  `de20` text,
  `de21` text,
  `de22` text,
  `de23` text,
  `de24` text,
  `de25` text,
  `de26` text,
  `de27` text,
  `de28` text,
  `de29` text,
  `de30` text,
  `de31` text,
  `de32` text,
  `de33` text,
  `de34` text,
  `de35` text,
  `de36` text,
  `de37` text,
  `de38` text,
  `de39` text,
  `de40` text,
  `de41` text,
  `de42` text,
  `de43` text,
  `de44` text,
  `de45` text,
  `de46` text,
  `de47` text,
  `de48` text,
  `de49` text,
  `de50` text,
  `de51` text,
  `de52` text,
  `de53` text,
  `de54` text,
  `de55` text,
  `de56` text,
  `de57` text,
  `de58` text,
  `de59` text,
  `de60` text,
  `de61` text,
  `de62` text,
  `de63` text,
  `de64` text,
  `de65` text,
  `de66` text,
  `de67` text,
  `de68` text,
  `de69` text,
  `de70` text,
  `de71` text,
  `de72` text,
  `de73` text,
  `de74` text,
  `de75` text,
  `de76` text,
  `de77` text,
  `de78` text,
  `de79` text,
  `de80` text,
  `de81` text,
  `de82` text,
  `de83` text,
  `de84` text,
  `de85` text,
  `de86` text,
  `de87` text,
  `de88` text,
  `de89` text,
  `de90` text,
  `de91` text,
  `de92` text,
  `de93` text,
  `de94` text,
  `de95` text,
  `de96` text,
  `de97` text,
  `de98` text,
  `de99` text,
  `de100` text,
  `de101` text,
  `de102` text,
  `de103` text,
  `de104` text,
  `de105` text,
  `de106` text,
  `de107` text,
  `de108` text,
  `de109` text,
  `de110` text,
  `de111` text,
  `de112` text,
  `de113` text,
  `de114` text,
  `de115` text,
  `de116` text,
  `de117` text,
  `de118` text,
  `de119` text,
  `de120` text,
  `de121` text,
  `de122` text,
  `de123` text,
  `de124` text,
  `de125` text,
  `de126` text,
  `de127` text,
  `de128` text,
  `de129` text,
  `de130` text,
  `de131` text,
  `de132` text,
  `de133` text,
  `de134` text,
  `de135` text,
  `de136` text,
  `de137` text,
  `de138` text,
  `de139` text,
  `de140` text,
  `de141` text,
  `de142` text,
  `de143` text,
  `de144` text,
  `de145` text,
  `de146` text,
  `de147` text,
  `de148` text,
  `de149` text,
  `de150` text,
  `de151` text,
  `de152` text,
  `de153` text,
  `de154` text,
  `de155` text,
  `de156` text,
  `de157` text,
  `de158` text,
  `de159` text,
  `de160` text,
  `de161` text,
  `de162` text,
  `de163` text,
  `de164` text,
  `de165` text,
  `de166` text,
  `de167` text,
  `de168` text,
  `de169` text,
  `de170` text,
  `de171` text,
  `de172` text,
  `de173` text,
  `de174` text,
  `de175` text,
  `de176` text,
  `de177` text,
  `de178` text,
  `de179` text,
  `de180` text,
  `de181` text,
  `de182` text,
  `de183` text,
  `de184` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of minutagrande
-- ----------------------------
INSERT INTO `minutagrande` VALUES ('1', 'prueba', 'o', 'o', 'o', 'xao', 'hola', 'o', 'o', 'once', 'o', 'o', 'o', 'o', 'o', 'o', 'oo', 'doce', 'oo', 'o', 'o', 'o', 'o', 'o', 'o', 'ensa', '', '', '', '', '', '', '', '', '', '', '', 'sopa', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'undefined', 'undefined', 'undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'undefined', '', '', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for pacientes
-- ----------------------------
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `Id_Paciente` int NOT NULL AUTO_INCREMENT,
  `Rut_Paciente` varchar(13) DEFAULT NULL,
  `Nombre_Paciente` varchar(60) DEFAULT NULL,
  `Apellido_Paciente` varchar(70) DEFAULT NULL,
  `Edad_Paciente` int DEFAULT '0',
  `Nacimiento_Paciente` date DEFAULT NULL,
  `Estatura_Paciente` varchar(50) DEFAULT '0',
  `Peso_Paciente` varchar(50) DEFAULT '0',
  `Sexo_Paciente` varchar(50) DEFAULT '1',
  `Enfermedades_Paciente` int DEFAULT '0',
  `ActFisica_Paciente` varchar(50) DEFAULT NULL,
  `Email_Paciente` varchar(200) DEFAULT NULL,
  `Fono_Paciente` int DEFAULT '0',
  `Comentario_Paciente` varchar(500) DEFAULT NULL,
  `FechaIngreso` varchar(50) DEFAULT NULL,
  `Usuario_Paciente` int DEFAULT '0',
  `Empresa_Paciente` int DEFAULT '0',
  `desayuno` int DEFAULT '1',
  `almuerzo` int DEFAULT '1',
  `once` int DEFAULT '1',
  `gramaje` int DEFAULT '0',
  `obs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Paciente`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of pacientes
-- ----------------------------
INSERT INTO `pacientes` VALUES ('1', '11-1', 'andres', 'videloa', '35', '1986-05-12', '170', '60', 'MASCULINO', '1', 'SI', 'jasg.ingeniero@gmail.com', '88787', 'asdasdasdasd', '2023-04-23', '1', '1', '5', '4', '1', '300', 'No');
INSERT INTO `pacientes` VALUES ('2', '3-4', 'sdfsdf', 'sdf', '34', '1987-02-11', '120', '45', 'MASCULINO', '1', 'SI', 'asdasd', '333', 'sdasdffsd', '2023-06-17', '1', '1', '1', '1', '1', '300', 'no');
INSERT INTO `pacientes` VALUES ('3', '4-5', 'asd', 'ddd', '34', '1986-05-11', '150', '45', 'MASCULINO', '1', 'SI', 'asd', '33', 'asddsfdfs', '2023-06-17', '1', '1', '1', '1', '1', '300', 'no');

-- ----------------------------
-- Table structure for pizarradesayuno
-- ----------------------------
DROP TABLE IF EXISTS `pizarradesayuno`;
CREATE TABLE `pizarradesayuno` (
  `id` int NOT NULL AUTO_INCREMENT,
  `de1` varchar(255) DEFAULT NULL,
  `de2` varchar(255) DEFAULT NULL,
  `de3` varchar(255) DEFAULT NULL,
  `de4` varchar(255) DEFAULT NULL,
  `de5` varchar(255) DEFAULT NULL,
  `de6` varchar(255) DEFAULT NULL,
  `de7` varchar(255) DEFAULT NULL,
  `de8` varchar(255) DEFAULT NULL,
  `de9` varchar(255) DEFAULT NULL,
  `de10` varchar(255) DEFAULT NULL,
  `de11` varchar(255) DEFAULT NULL,
  `de12` varchar(255) DEFAULT NULL,
  `de13` varchar(255) DEFAULT NULL,
  `de14` varchar(255) DEFAULT NULL,
  `de15` varchar(255) DEFAULT NULL,
  `de16` varchar(255) DEFAULT NULL,
  `de17` varchar(255) DEFAULT NULL,
  `de18` varchar(255) DEFAULT NULL,
  `de19` varchar(255) DEFAULT NULL,
  `de20` varchar(255) DEFAULT NULL,
  `de21` varchar(255) DEFAULT NULL,
  `de22` varchar(255) DEFAULT NULL,
  `de23` varchar(255) DEFAULT NULL,
  `de24` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of pizarradesayuno
-- ----------------------------
INSERT INTO `pizarradesayuno` VALUES ('1', 'test', 'hola', 'jkk', 'jhy', 'koko', 'agua', 'iuu', 'mm', 'solida', 'jjj', 'carne con fiedos', 'll', 'solido', 'llkk', 'dfdf', '77', 'h', 'dfff', 'hjh', 'ensalada', 'j', 'j', 'hhj', 'h');

-- ----------------------------
-- Table structure for pizarraonce
-- ----------------------------
DROP TABLE IF EXISTS `pizarraonce`;
CREATE TABLE `pizarraonce` (
  `id` int NOT NULL AUTO_INCREMENT,
  `de1` varchar(255) DEFAULT NULL,
  `de2` varchar(255) DEFAULT NULL,
  `de3` varchar(255) DEFAULT NULL,
  `de4` varchar(255) DEFAULT NULL,
  `de5` varchar(255) DEFAULT NULL,
  `de6` varchar(255) DEFAULT NULL,
  `de7` varchar(255) DEFAULT NULL,
  `de8` varchar(255) DEFAULT NULL,
  `de10` varchar(255) DEFAULT NULL,
  `de11` varchar(255) DEFAULT NULL,
  `de12` varchar(255) DEFAULT NULL,
  `de13` varchar(255) DEFAULT NULL,
  `de14` varchar(255) DEFAULT NULL,
  `de15` varchar(255) DEFAULT NULL,
  `de16` varchar(255) DEFAULT NULL,
  `de17` varchar(255) DEFAULT NULL,
  `de18` varchar(255) DEFAULT NULL,
  `de19` varchar(255) DEFAULT NULL,
  `de20` varchar(255) DEFAULT NULL,
  `de21` varchar(255) DEFAULT NULL,
  `de22` varchar(255) DEFAULT NULL,
  `de23` varchar(255) DEFAULT NULL,
  `de24` varchar(255) DEFAULT NULL,
  `de9` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of pizarraonce
-- ----------------------------
INSERT INTO `pizarraonce` VALUES ('1', 'once', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'oo', 'doce', 'oo', 'o', 'o', 'o', 'o', 'o', 'o', 'once');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `Id_Producto` int NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` varchar(80) NOT NULL,
  `Valor_Producto` int NOT NULL,
  `Gramaje` int NOT NULL,
  `Categoria_Producto` int NOT NULL,
  `Carbohidrato` int NOT NULL,
  `Calorias` int NOT NULL,
  `Imagen_Producto` varchar(300) NOT NULL,
  `Estado_Producto` int NOT NULL,
  `Proteinas` int DEFAULT NULL,
  PRIMARY KEY (`Id_Producto`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('21', 'Sin Asignacion', '1', '100', '11', '50', '50', '', '1', '50');
INSERT INTO `productos` VALUES ('22', 'Brocoli', '35', '100', '11', '100', '100', '', '1', '100');
INSERT INTO `productos` VALUES ('26', 'coliflor', '25', '100', '11', '100', '100', '', '1', '100');
INSERT INTO `productos` VALUES ('27', 'ravioles', '30', '100', '13', '100', '100', '', '1', '100');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id_Usuario` int NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(100) NOT NULL,
  `Apellido_Usuario` varchar(100) NOT NULL,
  `Correo_Usuario` varchar(100) NOT NULL,
  `Fono_Usuario` int NOT NULL,
  `Privilegio_Usuario` int NOT NULL,
  `Password_Usuario` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'ERNESTO', 'GUZMAN', 'hola', '66666', '3', '123456');
