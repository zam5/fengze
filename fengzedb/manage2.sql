/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 11:58:13
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `manage2`
-- ----------------------------
DROP TABLE IF EXISTS `manage2`;
CREATE TABLE `manage2` (
  `manage_id` int(11) NOT NULL auto_increment,
  `bq` varchar(20) NOT NULL,
  `ba` varchar(20) NOT NULL,
  `yx` varchar(20) NOT NULL,
  `rx` varchar(20) NOT NULL,
  `qq` varchar(20) NOT NULL,
  `hz` varchar(100) NOT NULL,
  PRIMARY KEY  (`manage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage2
-- ----------------------------
INSERT INTO manage2 VALUES ('1', '峰泽摄影工作室', '豫ICP备14036666号-6', 'admin@126.com', '0379-66668888', '32237384', '百度 中国人像摄影学会 北京市摄影行业协会 单仁资讯 牛商网');
