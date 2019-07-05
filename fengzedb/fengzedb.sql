/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50067
Source Host           : localhost:3306
Source Database       : fengzedb

Target Server Type    : MYSQL
Target Server Version : 50067
File Encoding         : 65001

Date: 2016-11-18 14:46:49
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
INSERT INTO picnews VALUES ('10', 'news', 'uploadimg/1479448620.jpg', '');
INSERT INTO picnews VALUES ('15', '15', 'uploadimg/1479391730.jpg', '');

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
INSERT INTO singart VALUES ('1', '机构简介', '<p></p><p>成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加盟店。<br/><br/>在新的历史机遇下，爱儿美将坚持&quot;对行业进步负责，对企业发展负责，对员工成长负责&quot;的经营思路，汇集行业青年才俊，加强技术创新，拓展互联网电商平台，提高服务标准，提升企业综合实力，用最专业的技术，最诚挚的热情，以及对宝宝最多的爱心，为亿万宝宝留下人生最美好、最纯真的童年记忆 &nbsp;</p>');
INSERT INTO singart VALUES ('2', '机构荣誉', '<p>峰泽摄影工作室版权所有 &nbsp;备案号：豫ICP备14036666号-6儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照邮箱：admin@126.com &nbsp;咨询热线：0379-66668888 &nbsp;QQ：32237384儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照合作机构：百度 中国人像摄影学会 北京市摄影行业协会 单仁资讯 牛商网 &nbsp;儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照儿童摄影技巧-如何在家给宝宝拍照</p>');
INSERT INTO singart VALUES ('3', '团队', '<p>成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加盟店。<br/><br/>在新的历史机遇下，爱儿美将坚持&quot;对行业进步负责，对企业发展负责，对员工成长负责&quot;的经营思路，汇集行业青年才俊，加强技术创新，拓展互联网电商平台，提高服务标准，提升企业综合实力，用最专业的技术，最诚挚的热情，以及对宝宝最多的爱心，为亿万宝宝留下人生最美好、最纯真的童年记忆。 &nbsp;</p>');
INSERT INTO singart VALUES ('4', '联系我们', '峰泽摄影工作室版权所有  备案号：豫ICP备14036666号-6<br />\r\n邮箱：admin@126.com  咨询热线：0379-66668888  QQ：32237384<br />\r\n合作机构：百度 中国人像摄影学会 北京市摄影行业协会 单仁资讯 牛商网');
INSERT INTO singart VALUES ('5', '首页机构简介', '<p>成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加盟店...</p>');
INSERT INTO singart VALUES ('6', '给孩子的最好礼物！', '<p>&nbsp;成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加</p><p>&nbsp;成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加</p><p>&nbsp;成立之日起，秉承&quot;以摄影为根，以服务为本&quot;的经营理念，扎根于北京，服务于全国。经过十多年的发展，现在在北京位列三甲，在全国拥有过1000多家品牌授权加</p>');
INSERT INTO singart VALUES ('7', '小电影 讲述宝宝成长的\"微故事\"', '<p>小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;小电影 讲述宝宝成长的&quot;微故事&quot;</p>');
