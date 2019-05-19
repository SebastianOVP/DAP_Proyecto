/*
Navicat MySQL Data Transfer

Source Server         : informatica
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : utltic2019

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2019-05-06 12:55:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alumnos
-- ----------------------------
DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL auto_increment,
  `no_control` text,
  `id_carrera` int(11) default NULL,
  `id_persona` int(11) default NULL,
  `id_registro` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_alumno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of alumnos
-- ----------------------------

-- ----------------------------
-- Table structure for carreras
-- ----------------------------
DROP TABLE IF EXISTS `carreras`;
CREATE TABLE `carreras` (
  `id_carreras` int(11) NOT NULL auto_increment,
  `nombre` text,
  `abreviatura` int(11) default NULL,
  `id_registro` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_carreras`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carreras
-- ----------------------------

-- ----------------------------
-- Table structure for personas
-- ----------------------------
DROP TABLE IF EXISTS `personas`;
CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL auto_increment,
  `nombre` text,
  `ap_paterno` text,
  `ap_materno` text,
  `sexo` text,
  `direccion` text,
  `telefono` text,
  `fecha_nacimiento` date default NULL,
  `correo` text,
  `tipo_persona` text,
  `id_registro` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_persona`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- ----------------------------

-- ----------------------------
-- Table structure for registros
-- ----------------------------
DROP TABLE IF EXISTS `registros`;
CREATE TABLE `registros` (
  `id_registro` int(11) NOT NULL auto_increment,
  `id_alumno` int(11) default NULL,
  `matricula` text,
  `fecha_ingreso` date default NULL,
  `hora_ingreso` time default NULL,
  `fecha_salida` date default NULL,
  `hora_salida` time default NULL,
  `fecha_actualiza` date default NULL,
  `hora_actualiza` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_registro`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of registros
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `usuario` text,
  `contra` text,
  `id_persona` int(11) default NULL,
  `id_registro` int(11) default NULL,
  `fecha_registro` date default NULL,
  `hora_registro` time default NULL,
  `activo` int(11) default NULL,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

-- ----------------------------
