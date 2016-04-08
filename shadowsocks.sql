SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `activate` (
  `id` int(11) NOT NULL,
  `activate_code` varchar(128) NOT NULL,
  `uid` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `invite_code` (
  `id` int(32) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8 NOT NULL,
  `user` int(32) NOT NULL,
  `used` tinyint(1) DEFAULT '0',
  `owner` int(11) DEFAULT '1',
  `user_name` varchar(128) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `options` (
  `option_id` int(20) unsigned NOT NULL,
  `option_name` varchar(64) NOT NULL,
  `option_value` longtext NOT NULL,
  `display_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `options` VALUES(1, 'invite_only', 'true', '邀请注册');
INSERT INTO `options` VALUES(2, 'default_transfer', '5368709120', '默认流量(Byte)');
INSERT INTO `options` VALUES(3, 'default_invite_number', '1', '默认邀请数量');
INSERT INTO `options` VALUES(4, 'check_min', '50', '签到下限(MB)');
INSERT INTO `options` VALUES(5, 'check_max', '100', '签到上限(MB)');
INSERT INTO `options` VALUES(6, 'version', '1.1', '程序版本');
INSERT INTO `options` VALUES(7, 'mail_protocol', 'sendgrid', '邮件引擎');
INSERT INTO `options` VALUES(8, 'mail_mailpath', '/usr/sbin/sendmail', 'Sendmail路径');
INSERT INTO `options` VALUES(9, 'mail_smtp_host', 'smtp.gmail.com', 'SMTP服务器');
INSERT INTO `options` VALUES(10, 'mail_smtp_user', 'admin@gmail.com', 'SMTP用户名');
INSERT INTO `options` VALUES(11, 'mail_smtp_pass', 'adminPassword', 'SMTP密码');
INSERT INTO `options` VALUES(12, 'mail_smtp_port', '587', 'SMTP端口');
INSERT INTO `options` VALUES(13, 'mail_smtp_crypto', 'tls', 'SMTP加密方法');
INSERT INTO `options` VALUES(14, 'mail_sender_address', 'admin@gmail.com', '发件邮箱');
INSERT INTO `options` VALUES(15, 'mail_sender_name', 'John Stephen', '发件人姓名');
INSERT INTO `options` VALUES(16, 'mail_sg_user', 'api_user', 'SendGrid API User');
INSERT INTO `options` VALUES(17, 'mail_sg_pass', 'api_key', 'SendGrid API Key');

CREATE TABLE IF NOT EXISTS `ss_admin` (
  `uid` int(11) NOT NULL,
  `admin_name` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ss_admin` VALUES(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

CREATE TABLE IF NOT EXISTS `ss_node` (
  `id` int(11) NOT NULL,
  `node_name` varchar(128) NOT NULL,
  `node_type` int(3) NOT NULL,
  `node_server` varchar(128) NOT NULL,
  `node_info` varchar(128) NOT NULL,
  `node_status` varchar(128) NOT NULL,
  `node_order` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `ss_node` VALUES(1, '默认节点', 0, '1.2.3.4', '默认节点', '可用', 0);

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `plan` varchar(2) NOT NULL,
  `passwd` varchar(16) NOT NULL,
  `t` int(11) NOT NULL DEFAULT '0',
  `u` bigint(20) NOT NULL,
  `d` bigint(20) NOT NULL,
  `transfer_enable` bigint(20) NOT NULL,
  `port` int(11) NOT NULL,
  `switch` tinyint(4) NOT NULL DEFAULT '1',
  `enable` tinyint(4) NOT NULL DEFAULT '1',
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `last_get_gift_time` int(11) NOT NULL DEFAULT '0',
  `last_check_in_time` int(11) NOT NULL DEFAULT '0',
  `last_rest_pass_time` int(11) NOT NULL DEFAULT '0',
  `reg_date` datetime NOT NULL,
  `invite_num` int(8) NOT NULL,
  `money` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` VALUES(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'A', '0000000', 0, 0, 0, 5368709120, 50000, 1, 1, 7, 0, 0, 0, '2015-01-01 00:00:00', 0, 0.00);

ALTER TABLE `activate`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `invite_code`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

ALTER TABLE `ss_admin`
  ADD PRIMARY KEY (`uid`);

ALTER TABLE `ss_node`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);


ALTER TABLE `activate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `invite_code`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
ALTER TABLE `options`
  MODIFY `option_id` int(20) unsigned NOT NULL AUTO_INCREMENT;
ALTER TABLE `ss_admin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `ss_node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
