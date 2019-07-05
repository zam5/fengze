/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 11:58:30
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `newsclass`
-- ----------------------------
DROP TABLE IF EXISTS `newsclass`;
CREATE TABLE `newsclass` (
  `class_id` int(20) NOT NULL auto_increment,
  `class_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of newsclass
-- ----------------------------
INSERT INTO newsclass VALUES ('1', '新闻动态');
INSERT INTO newsclass VALUES ('2', '技术交流');
INSERT INTO newsclass VALUES ('3', '公告');
INSERT INTO newsclass VALUES ('4', '小说');
INSERT INTO newsclass VALUES ('5', '科幻');
INSERT INTO newsclass VALUES ('6', '摄影');
INSERT INTO newsclass VALUES ('8', '电脑');
INSERT INTO newsclass VALUES ('9', '看看');
INSERT INTO newsclass VALUES ('10', 'hh');
INSERT INTO newsclass VALUES ('11', 'll');
INSERT INTO newsclass VALUES ('12', 'gg');
