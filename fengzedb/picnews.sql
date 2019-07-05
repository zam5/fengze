/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 11:58:36
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `picnews`
-- ----------------------------
DROP TABLE IF EXISTS `picnews`;
CREATE TABLE `picnews` (
  `picnews_id` int(20) NOT NULL auto_increment,
  `picnews_title` varchar(20) default NULL COMMENT '标题',
  `pic_url` varchar(500) NOT NULL COMMENT '图片地址',
  `content` text COMMENT '内容',
  PRIMARY KEY  (`picnews_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of picnews
-- ----------------------------
INSERT INTO picnews VALUES ('1', '1', 'uploadimg/1479353383.jpg', '');
INSERT INTO picnews VALUES ('2', '2', 'uploadimg/1479353507.jpg', '');
INSERT INTO picnews VALUES ('3', '3', 'uploadimg/1479353534.jpg', '');
INSERT INTO picnews VALUES ('4', '4', 'uploadimg/1479353559.jpg', '');
INSERT INTO picnews VALUES ('5', '5', 'uploadimg/1479353583.jpg', '');
INSERT INTO picnews VALUES ('6', '6', 'uploadimg/1479353602.jpg', '');
INSERT INTO picnews VALUES ('7', '7', 'uploadimg/1479353632.jpg', '');
INSERT INTO picnews VALUES ('8', '8', 'uploadimg/1479353655.jpg', '');
INSERT INTO picnews VALUES ('9', '9', 'uploadimg/1479353507.jpg', '');
INSERT INTO picnews VALUES ('15', '15', 'uploadimg/1479391730.jpg', '');
