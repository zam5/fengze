/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 11:58:23
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(20) NOT NULL auto_increment,
  `class_id` int(20) NOT NULL COMMENT '分类id',
  `news_title` varchar(20) NOT NULL COMMENT '标题',
  `second_title` varchar(20) default NULL COMMENT '副标题',
  `content` text NOT NULL COMMENT '内容',
  `recommend` char(10) NOT NULL COMMENT '是否推荐',
  `topmost` char(10) NOT NULL COMMENT '是否置顶',
  `seo_keyword` varchar(20) default NULL COMMENT 'seo关键字',
  `seo_describe` text COMMENT 'seo描述',
  PRIMARY KEY  (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO news VALUES ('1', '1', '儿童摄影技巧-如何在家给宝宝拍照', '', '儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照', '是', '是', '', null);
INSERT INTO news VALUES ('2', '2', '抓拍宝宝照基本6大技巧', '', '抓拍宝宝照基本6大技巧抓拍宝宝照基本6大技巧抓拍宝宝照基本6大技巧抓拍宝宝照基本6大技巧抓拍宝宝照基本6大技巧', '否', '否', '', null);
INSERT INTO news VALUES ('3', '1', '儿童摄影5大拍摄技巧', null, '儿童摄影5大拍摄技巧儿童摄影5大拍摄技巧儿童摄影5大拍摄技巧儿童摄影5大拍摄技巧', '否', '否', null, null);
INSERT INTO news VALUES ('4', '3', '儿童摄影师的儿童拍摄技巧', null, '儿童摄影师的儿童拍摄技巧儿童摄影师的儿童拍摄技巧儿童摄影师的儿童拍摄技巧儿童摄影师的儿童拍摄技巧', '是', '是', null, null);
INSERT INTO news VALUES ('5', '3', '抓住宝宝最纯真的表情-儿童拍摄技巧', '', '抓住宝宝最纯真的表情-儿童拍摄技巧', '是', '是', '', null);
INSERT INTO news VALUES ('6', '2', '儿童摄影的方法——儿童摄影的7个小诀窍', null, '儿童摄影的方法——儿童摄影的7个小诀窍儿童摄影的方法——儿童摄影的7个小诀窍', '是', '是', null, null);
INSERT INTO news VALUES ('7', '4', '抓住宝宝最纯真的表情-儿童拍摄技巧', null, '抓住宝宝最纯真的表情-儿童拍摄技巧抓住宝宝最纯真的表情-儿童拍摄技巧', '否', '否', null, null);
INSERT INTO news VALUES ('8', '4', '儿童摄影5大拍摄技巧', null, '儿童摄影5大拍摄技巧儿童摄影5大拍摄技巧儿童摄影5大拍摄技巧', '是', '否', null, null);
INSERT INTO news VALUES ('9', '4', '抓拍宝宝照基本6大技巧', null, '抓拍宝宝照基本6大技巧抓拍宝宝照基本6大技巧抓拍宝宝照基本6大技巧vv抓拍宝宝照基本6大技巧', '是', '否', null, null);
INSERT INTO news VALUES ('10', '2', '抓拍宝宝照基本6大技巧', null, '抓拍宝宝照基本6大技巧抓拍宝宝照基本6大技巧', '否', '是', null, null);
INSERT INTO news VALUES ('11', '3', '抓拍宝宝照基本6大技巧', null, '抓拍宝宝照基本6大技巧', '是', '是', null, null);
INSERT INTO news VALUES ('12', '4', '儿童摄影师的儿童拍摄技巧', null, '儿童摄影师的儿童拍摄技巧儿童摄影师的儿童拍摄技巧儿童摄影师的儿童拍摄技巧儿童摄影师的儿童拍摄技巧', '是', '是', null, null);
INSERT INTO news VALUES ('13', '2', '儿童摄影师的儿童拍摄技巧', null, '儿童摄影师的儿童拍摄技巧儿童摄影师的儿童拍摄技巧', '否', '是', null, null);
INSERT INTO news VALUES ('14', '1', '儿童摄影师的儿童拍摄技巧', null, '儿童摄影师的儿童拍摄技巧儿童摄影师的儿童拍摄技巧', '否', '是', null, null);
INSERT INTO news VALUES ('15', '1', '抓住宝宝最纯真的表情-儿童拍摄技巧', null, '抓住宝宝最纯真的表情-儿童拍摄技巧', '是', '否', null, null);
INSERT INTO news VALUES ('16', '2', '抓住宝宝最纯真的表情-儿童拍摄技巧', null, '抓住宝宝最纯真的表情-儿童拍摄技巧抓住宝宝最纯真的表情-儿童拍摄技巧', '否', '否', null, null);
