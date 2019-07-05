/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 11:56:30
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `poster`
-- ----------------------------
DROP TABLE IF EXISTS `poster`;
CREATE TABLE `poster` (
  `poster_id` int(20) NOT NULL auto_increment COMMENT 'id',
  `poster_title` varchar(20) NOT NULL COMMENT '广告标题',
  `pic_url` varchar(500) NOT NULL COMMENT '广告图片地址',
  `link_url` varchar(200) default NULL COMMENT '链接地址',
  `poster_order` varchar(20) NOT NULL COMMENT '广告排序',
  PRIMARY KEY  (`poster_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of poster
-- ----------------------------
INSERT INTO poster VALUES ('1', 'banner', 'uploadimg/1479439302.jpg', '', '1');
INSERT INTO poster VALUES ('2', 'banner', 'uploadimg/1479439342.jpg', '', '2');
INSERT INTO poster VALUES ('3', 'banner', 'uploadimg/1479439370.jpg', '', '3');
