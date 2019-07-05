/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 11:58:02
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `manage`
-- ----------------------------
DROP TABLE IF EXISTS `manage`;
CREATE TABLE `manage` (
  `manage_id` int(11) NOT NULL auto_increment,
  `manage_title` varchar(20) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`manage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of manage
-- ----------------------------
INSERT INTO manage VALUES ('1', '版权所有字段', '峰泽摄影工作室');
INSERT INTO manage VALUES ('2', '备案号字段', '豫ICP备14036666号-6');
INSERT INTO manage VALUES ('3', '邮箱字段', 'admin@126.com');
INSERT INTO manage VALUES ('4', '热线字段', '0379-66668888');
INSERT INTO manage VALUES ('5', 'QQ字段', '32237384');
INSERT INTO manage VALUES ('6', '合作单位字段', '百度 中国人像摄影学会 北京市摄影行业协会 单仁资讯 牛商网');
