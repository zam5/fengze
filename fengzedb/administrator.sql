/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 11:57:53
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `administrator`
-- ----------------------------
DROP TABLE IF EXISTS `administrator`;
CREATE TABLE `administrator` (
  `admin_id` int(20) NOT NULL auto_increment COMMENT '管理员ID',
  `admin_name` varchar(20) NOT NULL COMMENT '管理员名',
  `password` varchar(15) NOT NULL COMMENT '密码',
  `remark` text NOT NULL COMMENT '备注',
  `admin_rank` int(11) NOT NULL COMMENT '权限（1、2、3）',
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of administrator
-- ----------------------------
INSERT INTO administrator VALUES ('1', 'lsf', 'lsf', '我', '1');
INSERT INTO administrator VALUES ('2', 'ok', 'ok', 'ok', '2');
INSERT INTO administrator VALUES ('3', 'dd', 'dd', 'dd', '3');
