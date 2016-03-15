/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : yii2advanced

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2016-03-14 16:24:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dept
-- ----------------------------
DROP TABLE IF EXISTS `dept`;
CREATE TABLE `dept` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deletable` tinyint(1) NOT NULL DEFAULT '0',
  `parentid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(45) NOT NULL,
  `create_time` int(11) NOT NULL,
  `udpate_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dept
-- ----------------------------

-- ----------------------------
-- Table structure for employee
-- ----------------------------
DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `num` char(6) NOT NULL COMMENT '工号',
  `sex` enum('男','女') NOT NULL COMMENT '性别',
  `cname` varchar(10) NOT NULL COMMENT '中文名',
  `ename` varchar(20) NOT NULL COMMENT '英文名',
  `email` varchar(30) NOT NULL COMMENT '邮箱',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employee
-- ----------------------------
INSERT INTO `employee` VALUES ('1', 'CD0001', '男', '李祥', 'lixiang', 'phplixiang@camera360.com', '测试', '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('2', 'CD0002', '女', 'lixia', 'lixia', 'lixia@test.com', 'sadfasdf', '1453798388', '1453798388');
INSERT INTO `employee` VALUES ('3', 'CD0003', '男', '张三', 'zhangsan', 'zhangsan@test.comf', 'asdfasf', '1453798389', '1453798389');
INSERT INTO `employee` VALUES ('4', 'CD0004', '女', '李四', 'lisi', 'lisi@test.com', 'asdfasdfa', '1453798390', '1453798390');
INSERT INTO `employee` VALUES ('5', 'CD0005', '男', '王五', 'wangwu', 'wangwu@test.com', 'askdjfhal', '1453798391', '1453798391');
INSERT INTO `employee` VALUES ('6', 'CD0006', '女', '赵六', 'zhaoliu', 'zhaoliu@test.com', 'sadfashdfaks', '1453798392', '1453798392');
INSERT INTO `employee` VALUES ('7', 'CD0007', '男', '老板', 'boss', 'boss@test.com', 'opsyuiadhfaiso', '1453798393', '1453798393');
INSERT INTO `employee` VALUES ('8', 'CD0100', '男', 'leon', 'leon', '14706931@qq.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('9', 'CD0102', '男', 'Jack.Zhou', 'Jack.Zhou', 'jack.zhou@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('10', 'CD0101', '男', 'Johnny.Yan', 'Johnny.Yang', 'johnny.yang@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('11', 'CD0104', '女', 'Neva.Fu', 'Neva.Fu', 'neva.fu@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('12', 'CD0103', '男', 'Gavin.Lei', 'Gavin.Lei', 'gavin.lei@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('13', 'CD0106', '男', 'Seven.Zou', 'Seven.Zou', 'seven.zou@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('14', 'CD0109', '男', 'Summer.Wan', 'Summer.Wang', 'summer.wang@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('15', 'CD0110', '男', 'Tom.Wang', 'Tom.Wang', 'Tom.Wang@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('16', 'CD0111', '女', 'Lily.Ren', 'Lily.Ren', 'Lily.Ren@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('17', 'CD0112', '男', 'Bill.Xie', 'Bill.Xie', 'Bill.Xie@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('18', 'CD0108', '女', 'Ivy.Li', 'Ivy.Li', 'ivy.li@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('19', 'CD0114', '女', 'Abby.Zhang', 'Abby.Zhang', 'abby.zhang@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('20', 'CD1101', '男', 'Test', 'Test', 'test@dpoptics.com', null, '1453798387', '1453798387');
INSERT INTO `employee` VALUES ('21', 'CD1102', '女', 'aaaaaa', 'bbbbbb', 'cccccc', 'ddddd', '1453798387', '1453798387');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1453357734');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1453357736');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'lixiang', 'jdf3Fw4FNh_yOdKhHMr2qf9OPAs2WI2e', '$2y$13$NdbqdrDgh5eHDOM/U0I5auXCt9WeFl8zoHZz512.SsC2t8FJjHI/i', 'ni1JKQNViQyqgX1v5f9Juc9GhOIxjo35_1456380355', 'phplixiang@camera360.com', '10', '1453711681', '1456381343');
