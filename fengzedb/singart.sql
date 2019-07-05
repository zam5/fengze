/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 11:58:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `singart`
-- ----------------------------
DROP TABLE IF EXISTS `singart`;
CREATE TABLE `singart` (
  `singart_id` int(20) NOT NULL auto_increment COMMENT '文章id',
  `singart_title` varchar(20) NOT NULL COMMENT '文章标题',
  `content` text NOT NULL COMMENT '内容',
  PRIMARY KEY  (`singart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of singart
-- ----------------------------
INSERT INTO singart VALUES ('1', '机构简介', '<p><img title=\"1479367851518446.jpg\" alt=\"about.jpg\" src=\"/ueditor/php/upload/image/20161117/1479367851518446.jpg\"/></p><p>成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加盟店。<br/><br/>在新的历史机遇下，爱儿美将坚持&quot;对行业进步负责，对企业发展负责，对员工成长负责&quot;的经营思路，汇集行业青年才俊，加强技术创新，拓展互联网电商平台，提高服务标准，提升企业综合实力，用最专业的技术，最诚挚的热情，以及对宝宝最多的爱心，为亿万宝宝留下人生最美好、最纯真的童年记忆 &nbsp;</p>');
INSERT INTO singart VALUES ('2', '机构荣誉', '<p>峰泽摄影工作室版权所有 &nbsp;备案号：豫ICP备14036666号-6儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照邮箱：admin@126.com &nbsp;咨询热线：0379-66668888 &nbsp;QQ：32237384儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照合作机构：百度 中国人像摄影学会 北京市摄影行业协会 单仁资讯 牛商网 &nbsp;儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照</p>');
INSERT INTO singart VALUES ('3', '团队', '<p>成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加盟店。<br/><br/>在新的历史机遇下，爱儿美将坚持&quot;对行业进步负责，对企业发展负责，对员工成长负责&quot;的经营思路，汇集行业青年才俊，加强技术创新，拓展互联网电商平台，提高服务标准，提升企业综合实力，用最专业的技术，最诚挚的热情，以及对宝宝最多的爱心，为亿万宝宝留下人生最美好、最纯真的童年记忆。 &nbsp;</p>');
INSERT INTO singart VALUES ('4', '联系我们', '峰泽摄影工作室版权所有  备案号：豫ICP备14036666号-6<br />\r\n邮箱：admin@126.com  咨询热线：0379-66668888  QQ：32237384<br />\r\n合作机构：百度 中国人像摄影学会 北京市摄影行业协会 单仁资讯 牛商网');
INSERT INTO singart VALUES ('5', '首页机构简介', '<p><img title=\"1479381869713811.jpg\" alt=\"about.jpg\" src=\"/ueditor/php/upload/image/20161117/1479381869713811.jpg\"/>&nbsp;</p><p>成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加盟店</p>');
INSERT INTO singart VALUES ('6', '给孩子的最好礼物！', '<p>&nbsp;成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加</p><p>&nbsp;成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加</p><p>&nbsp;成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加</p>');
INSERT INTO singart VALUES ('7', '小电影 讲述宝宝成长的\"微故事\"', '<p>小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;</p>');
