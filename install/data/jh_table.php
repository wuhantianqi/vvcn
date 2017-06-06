--<?php exit("Access Denied");?>
DROP TABLE IF EXISTS `jh_activity`;
CREATE TABLE `jh_activity` (
  `activity_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL ,
  `city_id` smallint(6) DEFAULT NULL ,
  `cate_id` smallint(6) DEFAULT '0',
  `thumb` varchar(150) DEFAULT '' ,
  `banner` varchar(150) DEFAULT '' ,
  `phone` varchar(30) DEFAULT '' ,
  `qq` varchar(30) DEFAULT '' ,
  `addr` varchar(255) DEFAULT '' ,
  `tmpl` varchar(255) DEFAULT '' ,
  `bg_time` int(10) DEFAULT '0' ,
  `end_time` int(10) DEFAULT '0' ,
  `end_sign` int(10) DEFAULT '0' ,
  `sign_num` mediumint(8) DEFAULT '0' ,
  `views` mediumint(8) DEFAULT '0' ,
  `lng` float(10,6) DEFAULT NULL ,
  `lat` float(10,6) DEFAULT NULL ,
  `jt` varchar(200) DEFAULT '' ,
  `sj` varchar(200) DEFAULT '' ,
  `intro` varchar(510) DEFAULT NULL ,
  `info` mediumtext ,
  `orderby` smallint(6) DEFAULT '50' ,
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`activity_id`),
  KEY `city_id` (`city_id`,`orderby`,`audit`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_activity_cate`;
CREATE TABLE `jh_activity_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `seo_title` varchar(255) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_activity_lanmu`;
CREATE TABLE `jh_activity_lanmu` (
  `lanmu_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` mediumint(8) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` mediumtext,
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`lanmu_id`),
  KEY `activity_id` (`activity_id`) USING BTREE,
  KEY `orderby` (`orderby`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_activity_product`;
CREATE TABLE `jh_activity_product` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` mediumint(8) DEFAULT '0',
  `product_id` int(10) DEFAULT '0' ,
  `title` varchar(100) DEFAULT '' ,
  `photo` varchar(150) DEFAULT '' ,
  `link` varchar(255) DEFAULT '' ,
  `orderby` smallint(6) DEFAULT '50' ,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_activity_shop`;
CREATE TABLE `jh_activity_shop` (
  `sid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` mediumint(8) DEFAULT '0' ,
  `shop_id` mediumint(8) DEFAULT '0' ,
  `title` varchar(50) DEFAULT '' ,
  `logo` varchar(150) DEFAULT '' ,
  `link` varchar(255) DEFAULT '' ,
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_activity_sign`;
CREATE TABLE `jh_activity_sign` (
  `sign_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activity_id` mediumint(8) DEFAULT '0',
  `city_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `contact` varchar(20) DEFAULT '' ,
  `mobile` varchar(20) DEFAULT '' ,
  `mail` varchar(50) DEFAULT '' ,
  `qq` varchar(20) DEFAULT '' ,
  `address` varchar(200) DEFAULT '' ,
  `num` smallint(6) DEFAULT '0' ,
  `note` varchar(255) DEFAULT '' ,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT '',
  `clientip` varchar(15) DEFAULT NULL,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sign_id`),
  KEY `activity_id` (`activity_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_admin`;
CREATE TABLE `jh_admin` (
  `admin_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(15) DEFAULT '',
  `passwd` char(32) DEFAULT '',
  `role_id` smallint(6) DEFAULT '0',
  `last_login` int(10) DEFAULT '0',
  `last_ip` varchar(15) DEFAULT '0.0.0.0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_admin_role`;
CREATE TABLE `jh_admin_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) DEFAULT '',
  `role` enum('editor','admin','system','fenzhan') DEFAULT NULL,
  `priv` mediumtext,
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_adv`;
CREATE TABLE `jh_adv` (
  `adv_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(20) DEFAULT 'default',
  `theme_id` smallint(6) DEFAULT '0',
  `page` varchar(50) DEFAULT '',
  `title` varchar(50) DEFAULT '',
  `from` enum('text','photo','product','script','lunzhuan') DEFAULT 'photo' ,
  `limit` smallint(6) DEFAULT '10',
  `config` mediumtext ,
  `desc` varchar(255) DEFAULT '',
  `tmpl` mediumtext,
  `orderby` smallint(6) unsigned DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0' ,
  `closed` tinyint(1) unsigned DEFAULT '0',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`adv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_adv_item`;
CREATE TABLE `jh_adv_item` (
  `item_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `adv_id` smallint(6) unsigned DEFAULT '0' ,
  `city_id` smallint(6) DEFAULT '0',
  `title` varchar(100) DEFAULT '' ,
  `link` varchar(150) DEFAULT '' ,
  `thumb` varchar(150) DEFAULT '' ,
  `script` mediumtext ,
  `clicks` mediumint(8) unsigned DEFAULT '0' ,
  `stime` int(10) NOT NULL DEFAULT '0' ,
  `ltime` int(10) NOT NULL DEFAULT '0' ,
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) unsigned DEFAULT '0',
  `dateline` int(10) unsigned DEFAULT '0',
  `desc` varchar(255) DEFAULT '' ,
  `target` enum('_self','_blank','_parent','_top') DEFAULT '_blank' ,
  `orderby` smallint(6) unsigned DEFAULT '50' ,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=268 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article`;
CREATE TABLE `jh_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0' ,
  `cat_id` mediumint(8) unsigned DEFAULT '0' ,
  `from` enum('article','about','help','page') DEFAULT 'article' ,
  `page` varchar(15) DEFAULT '' ,
  `title` varchar(200) DEFAULT '' ,
  `thumb` varchar(150) DEFAULT '' ,
  `desc` varchar(255) DEFAULT '' ,
  `views` mediumint(8) DEFAULT '0' ,
  `favorites` mediumint(8) DEFAULT '0' ,
  `allow_comment` tinyint(1) DEFAULT '1' ,
  `comments` mediumint(8) DEFAULT '0' ,
  `photos` smallint(6) DEFAULT '0' ,
  `linkurl` varchar(255) DEFAULT '' ,
  `ontime` int(10) DEFAULT '0' ,
  `hidden` tinyint(1) DEFAULT '0' ,
  `orderby` smallint(6) unsigned DEFAULT '50' ,
  `audit` tinyint(1) DEFAULT '0' ,
  `closed` tinyint(1) unsigned DEFAULT '0',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`article_id`),
  KEY `cat_id` (`cat_id`,`from`,`audit`,`closed`,`hidden`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_cate`;
CREATE TABLE `jh_article_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `title` varchar(150) DEFAULT '',
  `level` tinyint(1) unsigned DEFAULT '1',
  `from` enum('about','help','page','article') DEFAULT 'article',
  `seo_title` varchar(255) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `orderby` smallint(6) unsigned DEFAULT '50',
  `hidden` tinyint(1) DEFAULT '0' ,
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_comment`;
CREATE TABLE `jh_article_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) DEFAULT '0' ,
  `uid` mediumint(8) DEFAULT '0' ,
  `content` varchar(512) DEFAULT '' ,
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '0.0.0.0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_content`;
CREATE TABLE `jh_article_content` (
  `content_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) NOT NULL,
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `content` mediumtext,
  `clientip` varchar(15) DEFAULT '0.0.0.0',
  PRIMARY KEY (`content_id`),
  KEY `article_id` (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_link`;
CREATE TABLE `jh_article_link` (
  `link_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `link` varchar(150) DEFAULT '',
  `orderby` smallint(6) unsigned DEFAULT '0',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_article_photo`;
CREATE TABLE `jh_article_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) DEFAULT '0',
  `title` varchar(100) DEFAULT NULL,
  `photo` varchar(150) DEFAULT '',
  `size` mediumint(8) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_ask`;
CREATE TABLE `jh_ask` (
  `ask_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `seo_title` varchar(256) DEFAULT NULL,
  `seo_keyword` varchar(256) DEFAULT NULL,
  `seo_description` varchar(256) DEFAULT NULL,
  `cat_id` mediumint(8) NOT NULL DEFAULT '0',
  `uid` mediumint(8) DEFAULT NULL,
  `intro` mediumtext,
  `thumb` varchar(256) DEFAULT NULL,
  `dateline` int(11) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '0.0.0.0',
  `views` int(11) DEFAULT '0',
  `answer_num` int(11) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `answer_id` int(11) DEFAULT '0' ,
  `orderby` int(11) DEFAULT '0' ,
  PRIMARY KEY (`ask_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=288 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_ask_answer`;
CREATE TABLE `jh_ask_answer` (
  `answer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ask_id` int(11) DEFAULT NULL,
  `uid` mediumint(11) DEFAULT '0',
  `contents` varchar(1024) DEFAULT NULL,
  `dateline` int(11) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '0.0.0.0',
  `audit` tinyint(1) DEFAULT '0' ,
  PRIMARY KEY (`answer_id`),
  KEY `ask_id` (`ask_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=303 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_ask_cate`;
CREATE TABLE `jh_ask_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `parent_id` mediumint(8) DEFAULT '0',
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(200) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_block`;
CREATE TABLE `jh_block` (
  `block_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(30) DEFAULT NULL,
  `page_id` smallint(6) DEFAULT '0',
  `title` varchar(50) DEFAULT '' ,
  `from` varchar(50) DEFAULT '' ,
  `type` enum('default','hot','new','only','zhanwei') DEFAULT 'default' ,
  `config` mediumtext ,
  `tmpl` mediumtext ,
  `limit` tinyint(3) DEFAULT '10' ,
  `ttl` mediumint(8) DEFAULT '900' ,
  `orderby` smallint(50) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`block_id`)
) ENGINE=MyISAM AUTO_INCREMENT=153 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_block_item`;
CREATE TABLE `jh_block_item` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `block_id` mediumint(8) unsigned DEFAULT '0',
  `itemId` int(10) DEFAULT '0' ,
  `title` varchar(50) DEFAULT '',
  `link` varchar(150) DEFAULT '',
  `thumb` varchar(150) DEFAULT '',
  `city_id` smallint(6) DEFAULT '0',
  `data` mediumtext,
  `expire_time` int(10) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `block_id` (`block_id`,`itemId`,`city_id`),
  KEY `orderby` (`orderby`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_block_page`;
CREATE TABLE `jh_block_page` (
  `page_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case`;
CREATE TABLE `jh_case` (
  `case_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0' ,
  `uid` mediumint(8) DEFAULT '0' ,
  `company_id` mediumint(8) DEFAULT '0' ,
  `home_name` varchar(80) DEFAULT '' ,
  `home_id` mediumint(8) DEFAULT '0' ,
  `huxing` varchar(150) DEFAULT '' ,
  `huxing_id` int(10) DEFAULT '0' ,
  `title` varchar(150) DEFAULT '' ,
  `photo` varchar(150) DEFAULT '' ,
  `size` mediumint(8) DEFAULT '0' ,
  `views` mediumint(8) DEFAULT '0' ,
  `likes` mediumint(8) DEFAULT '0' ,
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `intro` varchar(1024) DEFAULT NULL,
  `photos` mediumint(8) DEFAULT '0' ,
  `lastphotos` varchar(150) DEFAULT '' ,
  `lasttime` int(10) DEFAULT '0' ,
  `orderby` smallint(6) DEFAULT '50' ,
  `audit` tinyint(1) DEFAULT '0' ,
  `closed` tinyint(1) DEFAULT '0' ,
  `clientip` char(15) DEFAULT '0.0.0.0' ,
  `dateline` int(1) DEFAULT '0',
  PRIMARY KEY (`case_id`),
  KEY `__INDEX1` (`city_id`,`uid`,`company_id`,`home_id`),
  KEY `__INDEX2` (`lasttime`,`orderby`,`audit`,`closed`)
) ENGINE=MyISAM AUTO_INCREMENT=160 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case_attr`;
CREATE TABLE `jh_case_attr` (
  `case_id` int(10) NOT NULL DEFAULT '0',
  `attr_id` smallint(6) NOT NULL DEFAULT '0',
  `attr_value_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`case_id`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case_comment`;
CREATE TABLE `jh_case_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `case_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `content` varchar(1024) DEFAULT '',
  `audit` tinyint(1) DEFAULT '0' ,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `__INDEX` (`city_id`,`case_id`,`uid`,`audit`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case_like`;
CREATE TABLE `jh_case_like` (
  `like_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `case_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`like_id`),
  UNIQUE KEY `case_id` (`case_id`,`clientip`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_case_photo`;
CREATE TABLE `jh_case_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `case_id` mediumint(8) DEFAULT '0' ,
  `title` varchar(150) DEFAULT '' ,
  `photo` varchar(150) DEFAULT '' ,
  `size` smallint(6) DEFAULT '0' ,
  `views` mediumint(8) DEFAULT '0' ,
  `orderby` smallint(6) DEFAULT '50' ,
  `closed` tinyint(1) DEFAULT '0',
  `clientip` char(15) DEFAULT '0.0.0.0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`photo_id`),
  KEY `case_id` (`case_id`,`closed`,`orderby`,`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=821 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company`;
CREATE TABLE `jh_company` (
  `company_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `group_id` smallint(6) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `domain` varchar(10) DEFAULT '' ,
  `title` varchar(80) DEFAULT '',
  `name` varchar(50) DEFAULT '',
  `thumb` varchar(150) DEFAULT '',
  `logo` varchar(150) DEFAULT '',
  `banner` varchar(150) DEFAULT NULL,
  `slogan` varchar(255) DEFAULT '',
  `contact` varchar(30) DEFAULT '',
  `phone` varchar(30) DEFAULT '',
  `mobile` varchar(30) DEFAULT '',
  `qq` varchar(30) DEFAULT '',
  `addr` varchar(150) DEFAULT '',
  `xiaobao` mediumint(8) DEFAULT '0',
  `lng` varchar(15) DEFAULT '',
  `lat` varchar(15) DEFAULT '',
  `comments` mediumint(8) DEFAULT '0' ,
  `score` mediumint(8) DEFAULT '0' ,
  `score1` mediumint(8) NOT NULL DEFAULT '0',
  `score2` mediumint(8) DEFAULT '0',
  `score3` mediumint(8) DEFAULT '0',
  `score4` mediumint(8) DEFAULT '0',
  `score5` mediumint(8) DEFAULT '0',
  `tenders_num` mediumint(8) DEFAULT '0',
  `tenders_sign` mediumint(8) DEFAULT '0',
  `case_num` mediumint(8) DEFAULT '0',
  `site_num` mediumint(8) DEFAULT '0',
  `news_num` mediumint(8) DEFAULT '0',
  `youhui_num` mediumint(8) DEFAULT '0',
  `yuyue_num` mediumint(8) DEFAULT '0',
  `last_case` int(10) DEFAULT '0',
  `last_site` int(10) DEFAULT '0',
  `views` mediumint(8) DEFAULT '0',
  `verify_name` tinyint(1) DEFAULT '0',
  `is_vip` tinyint(1) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `lasttime` int(10) DEFAULT '0',
  `video` varchar(500) DEFAULT NULL,
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `flushtime` int(10) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`company_id`,`score1`),
  KEY `uid` (`uid`),
  KEY `__INDEX` (`city_id`,`area_id`,`audit`,`closed`),
  KEY `orderby` (`views`,`verify_name`,`is_vip`,`orderby`,`flushtime`),
  KEY `domain` (`domain`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_attr`;
CREATE TABLE `jh_company_attr` (
  `company_id` int(10) NOT NULL DEFAULT '0',
  `attr_id` smallint(6) DEFAULT '0',
  `attr_value_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`company_id`,`attr_value_id`),
  UNIQUE KEY `home_id` (`company_id`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_banner`;
CREATE TABLE `jh_company_banner` (
  `banner_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` mediumint(8) DEFAULT '0',
  `title` varchar(128) DEFAULT '',
  `photo` varchar(128) DEFAULT '',
  `link` varchar(128) DEFAULT '',
  `orderby` tinyint(1) DEFAULT '50',
  PRIMARY KEY (`banner_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_comment`;
CREATE TABLE `jh_company_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `score1` tinyint(1) DEFAULT '0',
  `score2` tinyint(1) DEFAULT '0',
  `score3` tinyint(1) NOT NULL DEFAULT '0',
  `score4` tinyint(1) DEFAULT '0',
  `score5` tinyint(1) DEFAULT '0',
  `content` varchar(1024) DEFAULT '',
  `reply` varchar(1024) DEFAULT '',
  `replyip` varchar(15) DEFAULT '',
  `replytime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`,`score3`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_fields`;
CREATE TABLE `jh_company_fields` (
  `company_id` mediumint(8) NOT NULL DEFAULT '0',
  `info` mediumtext,
  `skin` varchar(20) DEFAULT '',
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(200) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_news`;
CREATE TABLE `jh_company_news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `company_id` mediumint(9) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text,
  `views` mediumint(8) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_photo`;
CREATE TABLE `jh_company_photo` (
  `photo_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` mediumint(8) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1' ,
  `title` varchar(128) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `company_id` (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_youhui`;
CREATE TABLE `jh_company_youhui` (
  `youhui_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `title` varchar(80) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `stime` int(10) DEFAULT '0',
  `ltime` int(10) DEFAULT '0',
  `content` mediumtext,
  `sign_num` mediumint(8) DEFAULT '0',
  `flushtime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`youhui_id`),
  KEY `company_id` (`city_id`,`area_id`,`company_id`,`audit`),
  KEY `orderby` (`sign_num`,`flushtime`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_youhui_sign`;
CREATE TABLE `jh_company_youhui_sign` (
  `sign_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `youhui_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `contact` varchar(30) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(1024) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sign_id`),
  KEY `__INDEX` (`company_id`,`youhui_id`,`uid`,`status`,`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_yuyue`;
CREATE TABLE `jh_company_yuyue` (
  `yuyue_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `contact` varchar(32) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL ,
  `content` varchar(1024) DEFAULT NULL ,
  `status` tinyint(3) DEFAULT '0',
  `remark` varchar(1024) DEFAULT '',
  `clientip` varchar(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`yuyue_id`),
  KEY `company_id` (`company_id`),
  KEY `__INDEX` (`city_id`,`uid`,`status`,`dateline`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_company_zxpm`;
CREATE TABLE `jh_company_zxpm` (
  `zxpm_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` mediumint(8) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `mail` varchar(50) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `wx_openid` varchar(50) DEFAULT '',
  `wx_info` varchar(255) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`zxpm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_connect`;
CREATE TABLE `jh_connect` (
  `connect_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT '1',
  `open_id` varchar(32) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `dateline` int(11) DEFAULT '0',
  `create_ip` varchar(15) DEFAULT '0.0.0.0',
  PRIMARY KEY (`connect_id`),
  UNIQUE KEY `type` (`type`,`open_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_area`;
CREATE TABLE `jh_data_area` (
  `area_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `area_name` varchar(50) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_attr`;
CREATE TABLE `jh_data_attr` (
  `attr_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '' ,
  `from_id` smallint(6) DEFAULT '0' ,
  `multi` enum('Y','N') DEFAULT 'Y' ,
  `filter` enum('Y','N') DEFAULT 'Y' ,
  `orderby` smallint(6) DEFAULT '0' ,
  PRIMARY KEY (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_attr_from`;
CREATE TABLE `jh_data_attr_from` (
  `from_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(30) DEFAULT '',
  `title` varchar(50) DEFAULT '',
  PRIMARY KEY (`from_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_attr_value`;
CREATE TABLE `jh_data_attr_value` (
  `attr_value_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT ,
  `attr_id` smallint(6) DEFAULT '0' ,
  `title` varchar(50) DEFAULT '' ,
  `orderby` smallint(6) DEFAULT '50' ,
  PRIMARY KEY (`attr_value_id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_cate`;
CREATE TABLE `jh_data_cate` (
  `cate_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `from` enum('company','designer','mechanic','gz') DEFAULT 'company',
  `title` varchar(50) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_censor`;
CREATE TABLE `jh_data_censor` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('shield','censor','filter') DEFAULT NULL,
  `find` varchar(255) DEFAULT '',
  `replace` varchar(255) DEFAULT '',
  `admin` varchar(20) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_city`;
CREATE TABLE `jh_data_city` (
  `city_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `province_id` smallint(6) DEFAULT '0',
  `city_name` varchar(50) DEFAULT '',
  `pinyin` varchar(50) DEFAULT '' ,
  `theme_id` smallint(6) DEFAULT '0' ,
  `logo` varchar(150) DEFAULT '',
  `weixinqr` varchar(150) DEFAULT '',
  `phone` varchar(30) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `mail` varchar(30) DEFAULT '',
  `kfqq` varchar(30) DEFAULT '',
  `seo_title` varchar(255) DEFAULT '' ,
  `seo_keywords` varchar(255) DEFAULT '' ,
  `seo_description` varchar(255) DEFAULT '' ,
  `tongji` mediumtext,
  `orderby` smallint(6) DEFAULT '50' ,
  `audit` tinyint(1) DEFAULT '0' ,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_province`;
CREATE TABLE `jh_data_province` (
  `province_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `province_name` varchar(30) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`province_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_data_region`;
CREATE TABLE `jh_data_region` (
  `region_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `region_name` varchar(50) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned DEFAULT '0',
  `path_ids` varchar(255) DEFAULT NULL,
  `level` tinyint(3) unsigned DEFAULT '1',
  `map_x` varchar(50) DEFAULT '',
  `map_y` varchar(50) DEFAULT '',
  `orderby` smallint(6) unsigned DEFAULT '50',
  `closed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`region_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3267 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_designer`;
CREATE TABLE `jh_designer` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `group_id` smallint(6) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `school` varchar(100) DEFAULT '',
  `qq` varchar(15) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `attention_num` smallint(8) DEFAULT '0',
  `yuyue_num` mediumint(8) DEFAULT '0',
  `case_num` mediumint(8) DEFAULT '0' ,
  `blog_num` mediumint(8) DEFAULT '0' ,
  `views` mediumint(8) DEFAULT '0',
  `tenders_num` mediumint(8) DEFAULT '0',
  `tenders_sign` mediumint(8) DEFAULT '0',
  `comments` mediumint(8) DEFAULT '0',
  `score` mediumint(8) DEFAULT '0',
  `score1` mediumint(8) DEFAULT '0',
  `score2` mediumint(8) DEFAULT '0',
  `score3` mediumint(8) DEFAULT '0',
  `slogan` varchar(150) DEFAULT '' ,
  `about` mediumtext ,
  `orderby` smallint(6) DEFAULT '50',
  `flushtime` int(10) DEFAULT '0' ,
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `company_id` (`uid`,`company_id`,`orderby`,`audit`,`closed`,`city_id`,`area_id`),
  KEY `orderby` (`views`,`score`,`orderby`,`flushtime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_designer_article`;
CREATE TABLE `jh_designer_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `title` varchar(80) DEFAULT '',
  `content` mediumtext,
  `is_top` tinyint(1) DEFAULT '0' ,
  `views` mediumint(8) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`article_id`),
  KEY `uid` (`uid`),
  KEY `__INDEX` (`city_id`,`is_top`,`audit`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_designer_attr`;
CREATE TABLE `jh_designer_attr` (
  `uid` mediumint(8) unsigned NOT NULL,
  `attr_id` smallint(6) unsigned DEFAULT NULL,
  `attr_value_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_designer_comment`;
CREATE TABLE `jh_designer_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `designer_id` mediumint(8) DEFAULT '0',
  `score1` tinyint(3) DEFAULT '0',
  `score2` tinyint(3) DEFAULT '0',
  `score3` tinyint(3) DEFAULT '0',
  `content` varchar(1024) DEFAULT '',
  `reply` varchar(1024) DEFAULT '',
  `replyip` varchar(15) DEFAULT '',
  `replytime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_designer_yuyue`;
CREATE TABLE `jh_designer_yuyue` (
  `yuyue_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `uid` mediumint(9) DEFAULT '0',
  `designer_id` mediumint(9) DEFAULT '0',
  `company_id` mediumint(9) DEFAULT '0',
  `mobile` varchar(20) DEFAULT NULL ,
  `contact` varchar(32) DEFAULT NULL,
  `content` varchar(1024) DEFAULT NULL ,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(1024) DEFAULT '',
  `dateline` int(11) DEFAULT NULL,
  `clientip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`yuyue_id`),
  KEY `designer_id` (`designer_id`),
  KEY `__INDEX` (`uid`,`company_id`,`status`,`dateline`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_diary`;
CREATE TABLE `jh_diary` (
  `diary_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(5) DEFAULT '0',
  `title` varchar(128) DEFAULT NULL,
  `uid` mediumint(9) DEFAULT '0',
  `company_id` mediumint(9) DEFAULT '0',
  `home_id` mediumint(9) DEFAULT '0',
  `home_name` varchar(100) DEFAULT NULL,
  `thumb` varchar(150) DEFAULT '',
  `type_id` mediumint(9) DEFAULT '0',
  `way_id` mediumint(9) DEFAULT '0',
  `total_price` int(11) DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT '0000-00-00',
  `content_num` smallint(6) DEFAULT '0',
  `views` mediumint(8) DEFAULT '0',
  `comments` mediumint(8) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(11) DEFAULT '0',
  PRIMARY KEY (`diary_id`),
  KEY `city_id` (`city_id`,`type_id`,`way_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_diary_comment`;
CREATE TABLE `jh_diary_comment` (
  `comment_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `diary_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `content` varchar(1024) DEFAULT NULL,
  `audit` tinyint(1) DEFAULT '0' ,
  `clientip` varchar(15) DEFAULT '0.0.0.0',
  `dateline` int(11) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_diary_item`;
CREATE TABLE `jh_diary_item` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `diary_id` mediumint(8) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `content` text,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_fenxiao_log`;
CREATE TABLE `jh_fenxiao_log` (
  `log_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT NULL,
  `tenders_id` mediumint(8) DEFAULT NULL,
  `from` tinyint(1) DEFAULT '1',
  `number` decimal(10,2) DEFAULT '0.00',
  `log` mediumtext,
  `admin` varchar(225) DEFAULT NULL,
  `clientip` char(15) DEFAULT '0',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=285 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_fz_admin`;
CREATE TABLE `jh_fz_admin` (
  `fz_uid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `fz_name` varchar(30) DEFAULT '',
  `fz_passwd` char(32) DEFAULT '',
  `city_id` smallint(6) DEFAULT '0',
  `role` enum('admin','editor') DEFAULT NULL,
  `priv` mediumtext,
  `contact` varchar(20) DEFAULT '',
  `mail` varchar(50) DEFAULT '',
  `phone` varchar(15) DEFAULT '',
  `lastlogin` int(10) DEFAULT '0',
  `lastip` char(15) DEFAULT '',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`fz_uid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_gz`;
CREATE TABLE `jh_gz` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `group_id` smallint(6) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `qq` varchar(15) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `case_num` smallint(6) DEFAULT '0',
  `attention_num` smallint(6) DEFAULT NULL,
  `site_num` smallint(6) DEFAULT '0',
  `yuyue_num` smallint(6) DEFAULT '0',
  `views` mediumint(8) DEFAULT '0',
  `comments` mediumint(8) DEFAULT '0',
  `score` mediumint(8) DEFAULT '0',
  `score1` mediumint(8) DEFAULT '0',
  `score2` mediumint(8) DEFAULT '0',
  `score3` mediumint(8) DEFAULT '0',
  `slogan` varchar(150) DEFAULT '' ,
  `about` mediumtext,
  `tenders_num` mediumint(8) DEFAULT '0',
  `tenders_sign` mediumint(8) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `flushtime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `orderby` (`yuyue_num`,`views`,`score`,`orderby`,`flushtime`),
  KEY `__INDEX` (`city_id`,`area_id`,`audit`,`closed`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_gz_attr`;
CREATE TABLE `jh_gz_attr` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `attr_id` smallint(6) DEFAULT '0',
  `attr_value_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_gz_attr_copy`;
CREATE TABLE `jh_gz_attr_copy` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `attr_id` smallint(6) DEFAULT '0',
  `attr_value_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_gz_comment`;
CREATE TABLE `jh_gz_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `gz_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `score1` tinyint(3) DEFAULT '0',
  `score2` tinyint(3) DEFAULT '0',
  `score3` tinyint(3) DEFAULT '0',
  `content` varchar(1024) DEFAULT '',
  `reply` varchar(1024) DEFAULT '',
  `replyip` varchar(15) DEFAULT '',
  `replytime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_gz_copy`;
CREATE TABLE `jh_gz_copy` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `group_id` smallint(6) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `qq` varchar(15) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `case_num` smallint(6) DEFAULT '0',
  `attention_num` smallint(6) DEFAULT NULL,
  `site_num` smallint(6) DEFAULT '0',
  `yuyue_num` smallint(6) DEFAULT '0',
  `views` mediumint(8) DEFAULT '0',
  `comments` mediumint(8) DEFAULT '0',
  `score` mediumint(8) DEFAULT '0',
  `score1` mediumint(8) DEFAULT '0',
  `score2` mediumint(8) DEFAULT '0',
  `score3` mediumint(8) DEFAULT '0',
  `slogan` varchar(150) DEFAULT '' ,
  `about` mediumtext,
  `tenders_num` mediumint(8) DEFAULT '0',
  `tenders_sign` mediumint(8) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `flushtime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `orderby` (`yuyue_num`,`views`,`score`,`orderby`,`flushtime`),
  KEY `__INDEX` (`city_id`,`area_id`,`audit`,`closed`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_gz_yuyue`;
CREATE TABLE `jh_gz_yuyue` (
  `yuyue_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `gz_id` mediumint(8) DEFAULT '0',
  `mobile` varchar(20) DEFAULT '',
  `contact` varchar(30) DEFAULT '',
  `content` varchar(1024) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(1024) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`yuyue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home`;
CREATE TABLE `jh_home` (
  `home_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `title` varchar(150) DEFAULT '',
  `name` varchar(30) DEFAULT '' ,
  `thumb` varchar(150) DEFAULT '' ,
  `phone` varchar(30) DEFAULT '' ,
  `kfs` varchar(150) DEFAULT '' ,
  `qq_qun` varchar(15) DEFAULT '' ,
  `price` varchar(15) DEFAULT '' ,
  `kp_date` date DEFAULT NULL ,
  `jf_date` date DEFAULT NULL ,
  `lng` varchar(15) DEFAULT '',
  `lat` varchar(15) DEFAULT '',
  `addr` varchar(150) DEFAULT '',
  `views` mediumint(8) DEFAULT '0',
  `photos` mediumint(8) DEFAULT '0',
  `case_num` mediumint(8) DEFAULT '0',
  `site_num` mediumint(8) DEFAULT '0',
  `content` mediumtext,
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` char(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_attr`;
CREATE TABLE `jh_home_attr` (
  `home_id` mediumint(8) NOT NULL DEFAULT '0',
  `attr_id` mediumint(8) DEFAULT '0',
  `attr_value_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`home_id`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_package`;
CREATE TABLE `jh_home_package` (
  `package_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT '',
  `tuan_id` mediumint(8) DEFAULT NULL,
  `huxing_id` mediumint(8) DEFAULT NULL,
  `price` varchar(15) DEFAULT NULL,
  `total_price` varchar(15) DEFAULT NULL,
  `clientip` char(15) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_photo`;
CREATE TABLE `jh_home_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `home_id` mediumint(8) DEFAULT '0',
  `type` tinyint(1) DEFAULT '1',
  `title` varchar(150) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `size` mediumint(8) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`photo_id`),
  KEY `orderby` (`orderby`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_site`;
CREATE TABLE `jh_home_site` (
  `site_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0' ,
  `company_id` mediumint(8) DEFAULT '0' ,
  `case_id` mediumint(8) DEFAULT '0',
  `zxpm_id` mediumint(8) DEFAULT NULL,
  `thumb` varchar(150) DEFAULT NULL,
  `title` varchar(80) DEFAULT '',
  `home_name` varchar(150) DEFAULT '',
  `home_id` mediumint(8) DEFAULT '0',
  `house_mj` smallint(6) DEFAULT '0',
  `price` varchar(10) DEFAULT '' ,
  `status` tinyint(1) DEFAULT '0',
  `addr` varchar(255) DEFAULT '',
  `intro` varchar(255) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  `lng` varchar(15) DEFAULT '',
  `lat` varchar(15) DEFAULT '',
  `audit` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_site_item`;
CREATE TABLE `jh_home_site_item` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` mediumint(8) DEFAULT '0',
  `status` tinyint(3) DEFAULT '0',
  `title` varchar(80) DEFAULT '',
  `content` mediumtext,
  `photo_ids` varchar(255) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`item_id`),
  KEY `__INDEX` (`site_id`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_tuan`;
CREATE TABLE `jh_home_tuan` (
  `tuan_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `title` varchar(80) DEFAULT '',
  `home_id` mediumint(8) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `sign_num` mediumint(8) DEFAULT '0' ,
  `qy_num` mediumint(8) DEFAULT '0' ,
  `sg_num` mediumint(8) DEFAULT '0' ,
  `stime` int(10) DEFAULT '0',
  `ltime` int(10) DEFAULT '0',
  `content` mediumtext,
  `audit` tinyint(1) DEFAULT '0',
  `jieyue` varchar(15) DEFAULT NULL,
  `clientip` char(15) DEFAULT NULL,
  `dateline` int(11) DEFAULT '0',
  PRIMARY KEY (`tuan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_home_tuan_sign`;
CREATE TABLE `jh_home_tuan_sign` (
  `sign_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `tuan_id` mediumint(8) DEFAULT NULL,
  `package_id` mediumint(8) DEFAULT NULL,
  `uid` mediumint(8) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL ,
  `contact` varchar(32) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `clientip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`sign_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_jforder`;
CREATE TABLE `jh_jforder` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` int(10) DEFAULT '0' ,
  `uid` mediumint(8) DEFAULT '0',
  `product_id` mediumint(8) DEFAULT '0' ,
  `product_name` varchar(50) DEFAULT NULL ,
  `product_num` smallint(6) DEFAULT NULL ,
  `product_price` decimal(10,0) DEFAULT '0' ,
  `product_jfprice` smallint(6) DEFAULT '0' ,
  `jfamount` mediumint(8) DEFAULT '0' ,
  `contact` varchar(50) DEFAULT '0' ,
  `mobile` varchar(15) DEFAULT NULL ,
  `addr` varchar(200) DEFAULT NULL ,
  `note` varchar(255) DEFAULT '' ,
  `pay_status` tinyint(1) DEFAULT '0' ,
  `pay_time` int(10) DEFAULT '0' ,
  `order_status` tinyint(1) DEFAULT '0' ,
  `audit` tinyint(1) DEFAULT '1',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT NULL,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_jfproduct`;
CREATE TABLE `jh_jfproduct` (
  `product_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL ,
  `cat_id` smallint(6) DEFAULT '0' ,
  `brand_id` mediumint(8) DEFAULT '0' ,
  `area_id` mediumint(8) DEFAULT '0',
  `jfprice` smallint(8) DEFAULT '0' ,
  `photo` varchar(150) DEFAULT NULL ,
  `info` varchar(150) DEFAULT NULL ,
  `viwes` mediumint(8) DEFAULT '0' ,
  `buys` mediumint(8) DEFAULT '0' ,
  `kucun` mediumint(8) DEFAULT '0' ,
  `audit` tinyint(1) DEFAULT '0' ,
  `closed` tinyint(1) DEFAULT '0' ,
  `orderby` smallint(6) DEFAULT '0' ,
  `dateline` int(10) DEFAULT '0' ,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_links`;
CREATE TABLE `jh_links` (
  `link_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '' ,
  `link` varchar(150) DEFAULT '' ,
  `logo` varchar(150) DEFAULT '' ,
  `desc` varchar(512) DEFAULT '',
  `city_id` smallint(5) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_mechanic`;
CREATE TABLE `jh_mechanic` (
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `group_id` smallint(6) DEFAULT '0',
  `name` varchar(50) DEFAULT '',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `mobile` varchar(20) DEFAULT '',
  `qq` varchar(15) DEFAULT '',
  `tenders_sign` mediumint(8) DEFAULT '0',
  `tenders_num` mediumint(8) DEFAULT '0',
  `yuyue_num` mediumint(8) DEFAULT '0',
  `about` mediumtext ,
  `views` mediumint(8) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `flushtime` int(10) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `orderby` (`orderby`,`flushtime`),
  KEY `__INDEX` (`city_id`,`area_id`,`audit`,`closed`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_mechanic_attr`;
CREATE TABLE `jh_mechanic_attr` (
  `uid` mediumint(8) unsigned NOT NULL,
  `attr_id` smallint(6) unsigned DEFAULT NULL,
  `attr_value_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`uid`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_mechanic_yuyue`;
CREATE TABLE `jh_mechanic_yuyue` (
  `yuyue_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mechanic_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `contact` varchar(20) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `content` varchar(255) DEFAULT '',
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(1024) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`yuyue_id`),
  KEY `__INDEX` (`mechanic_id`,`uid`,`city_id`,`dateline`,`status`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member`;
CREATE TABLE `jh_member` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` smallint(6) DEFAULT '0',
  `uname` varchar(50) DEFAULT '',
  `passwd` char(32) DEFAULT '',
  `from` enum('member','shop','company','mechanic','designer','gz') DEFAULT 'member' ,
  `mail` varchar(100) DEFAULT '@' ,
  `mobile` varchar(15) DEFAULT '' ,
  `credits` mediumint(8) DEFAULT '0' ,
  `gold` mediumint(8) DEFAULT '0' ,
  `gender` enum('man','woman') DEFAULT NULL ,
  `city_id` smallint(6) DEFAULT '0' ,
  `realname` varchar(50) DEFAULT '' ,
  `face` varchar(150) DEFAULT '' ,
  `face_80` varchar(150) DEFAULT '' ,
  `face_32` varchar(150) DEFAULT '' ,
  `Y` smallint(4) DEFAULT '0' ,
  `M` tinyint(2) DEFAULT '0' ,
  `D` tinyint(2) DEFAULT '0' ,
  `verify` tinyint(1) unsigned DEFAULT '0' ,
  `uc_uid` mediumint(8) DEFAULT '0' ,
  `jifen` int(10) DEFAULT '0',
  `cart` varchar(1024) DEFAULT '' ,
  `lastlogin` int(10) unsigned DEFAULT '0' ,
  `loginip` char(15) DEFAULT '0.0.0.0' ,
  `truste_money` decimal(10,2) DEFAULT '0.00',
  `closed` tinyint(1) unsigned DEFAULT '0' ,
  `regip` char(15) DEFAULT '0.0.0.0' ,
  `dateline` int(10) unsigned DEFAULT '0' ,
  PRIMARY KEY (`uid`),
  KEY `uname` (`uname`),
  KEY `mail` (`mail`),
  KEY `mobile` (`mobile`),
  KEY `uc_uid` (`uc_uid`),
  KEY `__INDEX` (`verify`,`closed`,`dateline`,`from`,`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=270 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_address`;
CREATE TABLE `jh_member_address` (
  `addr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT '0',
  `title` varchar(100) DEFAULT NULL,
  `addr` varchar(200) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `default` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`addr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_connect`;
CREATE TABLE `jh_member_connect` (
  `connect_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `from` enum('qzone','weibo','alipay','taobao') DEFAULT 'qzone',
  `open_id` varchar(32) DEFAULT '0',
  `token` varchar(50) DEFAULT '',
  `uid` mediumint(8) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`connect_id`),
  UNIQUE KEY `type` (`from`,`open_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_favorite`;
CREATE TABLE `jh_member_favorite` (
  `fav_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `from` enum('case','shop','gz','designer','product','company') DEFAULT NULL,
  `itemId` int(10) DEFAULT NULL ,
  `dateline` int(10) DEFAULT NULL ,
  PRIMARY KEY (`fav_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_fields`;
CREATE TABLE `jh_member_fields` (
  `uid` int(10) NOT NULL DEFAULT '0',
  `addr` varchar(255) DEFAULT '',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_flush`;
CREATE TABLE `jh_member_flush` (
  `flush_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `gold` mediumint(8) DEFAULT '0',
  `from` varchar(10) NOT NULL DEFAULT '',
  `itemId` int(10) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`flush_id`,`from`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_group`;
CREATE TABLE `jh_member_group` (
  `group_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(30) DEFAULT '',
  `from` enum('member','mechanic','foreman','designer','company','shop','gz') DEFAULT 'member',
  `icon` varchar(150) DEFAULT '',
  `free_count` smallint(6) DEFAULT '0' ,
  `priv` mediumtext,
  `orderby` smallint(5) DEFAULT '50',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_group_copy`;
CREATE TABLE `jh_member_group_copy` (
  `group_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(30) DEFAULT '',
  `from` enum('member','mechanic','foreman','designer','company','shop','gz') DEFAULT 'member',
  `icon` varchar(150) DEFAULT '',
  `free_count` smallint(6) DEFAULT '0' ,
  `priv` mediumtext,
  `orderby` smallint(5) DEFAULT '50',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_log`;
CREATE TABLE `jh_member_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `from` enum('credits','gold','truste','money') DEFAULT NULL,
  `action` varchar(10) DEFAULT '' ,
  `number` smallint(6) DEFAULT '0',
  `log` varchar(255) DEFAULT '',
  `admin` varchar(255) DEFAULT '',
  `clientip` char(15) DEFAULT '0.0.0.0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=485 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_packet`;
CREATE TABLE `jh_member_packet` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) DEFAULT NULL,
  `uid` mediumint(8) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `cate_id` mediumint(6) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0',
  `price` decimal(10,2) DEFAULT NULL,
  `man` mediumint(8) DEFAULT NULL,
  `time` int(5) DEFAULT NULL,
  `last_time` int(10) DEFAULT NULL ,
  `code` varchar(50) DEFAULT NULL,
  `ltime` int(10) NOT NULL,
  `is_use` tinyint(1) NOT NULL DEFAULT '0',
  `desc` text,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=344 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_verify`;
CREATE TABLE `jh_member_verify` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) DEFAULT '' ,
  `id_number` varchar(50) DEFAULT '' ,
  `id_photo` varchar(150) DEFAULT '' ,
  `mobile` varchar(50) DEFAULT NULL ,
  `verify` tinyint(1) DEFAULT '0' ,
  `refuse` varchar(255) DEFAULT '' ,
  `verify_time` int(10) DEFAULT '0' ,
  `request_ip` varchar(15) DEFAULT '0.0.0.0' ,
  `request_time` int(10) DEFAULT '0' ,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_member_weixin`;
CREATE TABLE `jh_member_weixin` (
  `uid` mediumint(8) DEFAULT '0',
  `openid` char(50) DEFAULT '',
  `unionid` char(50) DEFAULT '',
  `info` mediumtext ,
  `status` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_order`;
CREATE TABLE `jh_order` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_no` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0',
  `city_id` mediumint(8) DEFAULT NULL,
  `product_count` mediumint(8) DEFAULT '0',
  `product_number` mediumint(8) DEFAULT '0',
  `product_amount` decimal(10,2) DEFAULT '0.00' ,
  `freight` decimal(6,2) DEFAULT '0.00' ,
  `amount` decimal(10,2) DEFAULT '0.00',
  `contact` varchar(50) DEFAULT '' ,
  `mobile` varchar(15) DEFAULT '' ,
  `addr` varchar(200) DEFAULT '' ,
  `note` varchar(255) DEFAULT '' ,
  `pay_status` tinyint(1) DEFAULT '0' ,
  `pay_time` int(10) DEFAULT '0' ,
  `order_status` tinyint(1) DEFAULT '0' ,
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  `project_id` mediumint(8) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_order_product`;
CREATE TABLE `jh_order_product` (
  `order_pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) DEFAULT '0',
  `product_id` int(10) DEFAULT '0',
  `product_name` varchar(100) DEFAULT '',
  `spec_id` int(10) DEFAULT '0',
  `spec_name` varchar(50) DEFAULT '',
  `product_price` decimal(10,2) DEFAULT '0.00',
  `number` smallint(6) DEFAULT '0',
  `freight` decimal(6,2) DEFAULT '0.00',
  `amount` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`order_pid`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=195 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_packet`;
CREATE TABLE `jh_packet` (
  `packet_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL,
  `cate_id` mediumint(6) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `man` mediumint(6) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `last_time` int(10) DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `shop_id` mediumint(8) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`packet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_payment`;
CREATE TABLE `jh_payment` (
  `payment_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `payment` varchar(20) DEFAULT '',
  `title` varchar(100) DEFAULT '',
  `logo` varchar(150) DEFAULT '',
  `config` mediumtext,
  `status` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_payment_log`;
CREATE TABLE `jh_payment_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0' ,
  `from` enum('order','truste','gold') DEFAULT NULL ,
  `truste_id` mediumint(8) DEFAULT NULL,
  `payment` varchar(20) DEFAULT '' ,
  `trade_no` int(10) DEFAULT '0' ,
  `amount` decimal(10,2) DEFAULT '0.00' ,
  `packet` mediumint(10) DEFAULT NULL,
  `payed` tinyint(1) DEFAULT '0' ,
  `payedip` varchar(15) DEFAULT '' ,
  `payedtime` int(10) DEFAULT '0' ,
  `pay_trade_no` varchar(50) DEFAULT '' ,
  `extra_pay` varchar(200) DEFAULT '' ,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`log_id`),
  KEY `trade_no` (`trade_no`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=245 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_pm_site`;
CREATE TABLE `jh_pm_site` (
  `site_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '' ,
  `zxpm_id` int(10) DEFAULT '0' ,
  `city_id` smallint(6) DEFAULT '0' ,
  `area_id` mediumint(8) DEFAULT '0' ,
  `type_id` tinyint(2) unsigned DEFAULT NULL ,
  `addr` varchar(255) DEFAULT '' ,
  `home_name` varchar(100) DEFAULT '' ,
  `house_mj` smallint(6) DEFAULT '0' ,
  `custom` varchar(255) DEFAULT '0' ,
  `custom_id` int(11) DEFAULT NULL,
  `company_id` int(10) DEFAULT '0' ,
  `company` varchar(255) DEFAULT NULL,
  `price` int(10) DEFAULT '0' ,
  `status` tinyint(1) DEFAULT '1' ,
  `closed` tinyint(1) DEFAULT '0',
  `starttime` int(10) DEFAULT '0' ,
  `endtime` int(11) DEFAULT NULL,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_pm_site_progress`;
CREATE TABLE `jh_pm_site_progress` (
  `progress_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(10) DEFAULT '0' ,
  `company_id` int(10) DEFAULT '0' ,
  `content` varchar(255) DEFAULT '' ,
  `status` tinyint(1) unsigned DEFAULT '0' ,
  `attach` varchar(255) DEFAULT NULL,
  `dateline` int(10) DEFAULT '0' ,
  PRIMARY KEY (`progress_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_price_attr`;
CREATE TABLE `jh_price_attr` (
  `priceattr_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `pricefrom_id` smallint(6) DEFAULT NULL,
  `order` smallint(6) DEFAULT NULL,
  `city_id` smallint(6) DEFAULT NULL,
  `zhucai` decimal(10,2) DEFAULT NULL,
  `fucai` decimal(10,2) DEFAULT NULL,
  `rengong` decimal(10,2) DEFAULT '0.00',
  `content` varchar(255) DEFAULT NULL,
  `per` varchar(10) DEFAULT '0.00',
  PRIMARY KEY (`priceattr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_price_attr_from`;
CREATE TABLE `jh_price_attr_from` (
  `pricefrom_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `pricefrom` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `city_id` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`pricefrom_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product`;
CREATE TABLE `jh_product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT '' ,
  `name` varchar(50) DEFAULT '' ,
  `shop_id` mediumint(8) DEFAULT '0',
  `cat_id` smallint(6) DEFAULT '0' ,
  `vcat_id` mediumint(8) DEFAULT '0' ,
  `brand_id` mediumint(8) DEFAULT '0' ,
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `danwei` varchar(20) DEFAULT '' ,
  `market_price` decimal(10,2) DEFAULT '0.00' ,
  `price` decimal(10,2) DEFAULT '0.00' ,
  `freight` decimal(8,0) DEFAULT '0' ,
  `photo` varchar(150) DEFAULT '' ,
  `photos` smallint(6) DEFAULT '0' ,
  `views` mediumint(8) DEFAULT '0' ,
  `score` mediumint(8) DEFAULT '0' ,
  `comments` mediumint(8) DEFAULT '0' ,
  `books` mediumint(8) DEFAULT '0' ,
  `store` mediumint(8) DEFAULT NULL,
  `buys` mediumint(8) DEFAULT '0' ,
  `onsale` enum('Y','N') DEFAULT 'Y' ,
  `onpayment` tinyint(1) DEFAULT '0' ,
  `sale_type` tinyint(1) DEFAULT '0' ,
  `sale_time` int(10) DEFAULT '0' ,
  `sale_sku` mediumint(8) DEFAULT '0' ,
  `sale_count` mediumint(8) DEFAULT '0' ,
  `sale_remai` tinyint(1) DEFAULT '0' ,
  `sale_youhui` tinyint(1) DEFAULT '0' ,
  `sale_tuijian` tinyint(1) DEFAULT '0' ,
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `lastupdate` int(10) DEFAULT '0' ,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`product_id`),
  KEY `shop_id` (`shop_id`,`orderby`,`audit`,`closed`,`onsale`,`sale_type`,`sale_remai`,`sale_youhui`,`sale_tuijian`),
  KEY `price` (`vcat_id`,`brand_id`,`city_id`,`area_id`,`price`,`orderby`,`audit`,`closed`,`onsale`),
  KEY `views` (`vcat_id`,`brand_id`,`city_id`,`area_id`,`freight`,`views`,`orderby`,`audit`,`closed`),
  KEY `buys` (`vcat_id`,`brand_id`,`city_id`,`area_id`,`score`,`buys`,`orderby`,`audit`,`closed`,`onsale`,`books`),
  KEY `sale` (`onsale`,`sale_type`,`sale_remai`,`sale_youhui`,`sale_tuijian`,`onpayment`)
) ENGINE=MyISAM AUTO_INCREMENT=235 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_attr`;
CREATE TABLE `jh_product_attr` (
  `product_id` int(10) NOT NULL DEFAULT '0',
  `attr_id` smallint(6) NOT NULL DEFAULT '0',
  `attr_value_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_comment`;
CREATE TABLE `jh_product_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) unsigned DEFAULT '0',
  `city_id` smallint(6) DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT '0',
  `uid` mediumint(8) unsigned DEFAULT '0' ,
  `score` tinyint(3) unsigned DEFAULT '0' ,
  `content` varchar(255) DEFAULT '' ,
  `reply` varchar(255) DEFAULT '' ,
  `replyip` varchar(15) DEFAULT '' ,
  `replytime` int(10) DEFAULT '0' ,
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`),
  KEY `shop_id` (`audit`,`shop_id`),
  KEY `product_id` (`audit`,`product_id`),
  KEY `uid` (`uid`,`audit`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_fields`;
CREATE TABLE `jh_product_fields` (
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `seo_title` varchar(255) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(255) DEFAULT '',
  `info` mediumtext,
  `clientip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_photo`;
CREATE TABLE `jh_product_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) DEFAULT '0',
  `shop_id` mediumint(8) DEFAULT '0',
  `photo` varchar(510) DEFAULT '' ,
  `title` varchar(100) DEFAULT '' ,
  `size` smallint(6) unsigned DEFAULT '0' ,
  `orderby` smallint(6) DEFAULT '50' ,
  `dateline` int(10) unsigned DEFAULT NULL ,
  PRIMARY KEY (`photo_id`),
  KEY `product_id` (`product_id`,`orderby`),
  KEY `shop_id` (`shop_id`,`orderby`)
) ENGINE=MyISAM AUTO_INCREMENT=1006 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_product_spec`;
CREATE TABLE `jh_product_spec` (
  `spec_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) DEFAULT '0',
  `price` decimal(10,2) DEFAULT '0.00',
  `spec_name` varchar(50) DEFAULT '',
  `spec_photo` varchar(150) DEFAULT '',
  `sale_sku` mediumint(8) DEFAULT '0',
  `sale_count` mediumint(8) DEFAULT '0',
  PRIMARY KEY (`spec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_rebate_log`;
CREATE TABLE `jh_rebate_log` (
  `log_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) NOT NULL,
  `shop_id` mediumint(8) NOT NULL,
  `from` tinyint(1) NOT NULL DEFAULT '0' ,
  `money` decimal(10,2) DEFAULT '0.00' ,
  `contact` varchar(20) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `card` varchar(20) DEFAULT NULL,
  `status` smallint(3) DEFAULT '1' ,
  `shop_remark` text,
  `admin_remark` text,
  `last_time` int(10) DEFAULT NULL ,
  `evidence` varchar(150) DEFAULT NULL ,
  `clientip` char(15) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_session`;
CREATE TABLE `jh_session` (
  `SSID` char(35) NOT NULL,
  `uid` mediumint(8) DEFAULT '0',
  `city_id` mediumint(8) DEFAULT '0',
  `ip` char(15) DEFAULT '0.0.0.0' ,
  `data` varchar(1024) DEFAULT NULL,
  `lastupdate` int(10) DEFAULT '0',
  PRIMARY KEY (`SSID`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop`;
CREATE TABLE `jh_shop` (
  `shop_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0' ,
  `group_id` smallint(6) DEFAULT '0',
  `money` decimal(10,2) DEFAULT '0.00' ,
  `cat_id` mediumint(8) DEFAULT '0' ,
  `city_id` smallint(6) DEFAULT '0' ,
  `area_id` mediumint(6) DEFAULT '0' ,
  `domain` varchar(10) DEFAULT '' ,
  `title` varchar(150) DEFAULT '' ,
  `name` varchar(50) DEFAULT '' ,
  `logo` varchar(150) DEFAULT '' ,
  `thumb` varchar(150) DEFAULT '' ,
  `contact` varchar(50) DEFAULT '' ,
  `phone` varchar(20) DEFAULT '' ,
  `xiaobao` mediumint(8) DEFAULT '0' ,
  `views` int(10) DEFAULT '0' ,
  `credit` int(10) DEFAULT '0' ,
  `score` int(10) DEFAULT '0' ,
  `comments` mediumint(8) DEFAULT '0' ,
  `products` mediumint(6) DEFAULT '0' ,
  `verify_name` tinyint(1) DEFAULT '0' ,
  `tenders_num` mediumint(8) DEFAULT '0',
  `tenders_sign` mediumint(8) DEFAULT '0',
  `is_vip` tinyint(1) DEFAULT '0' ,
  `lng` varchar(15) DEFAULT '' ,
  `lat` varchar(15) DEFAULT '' ,
  `orderby` smallint(6) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `flushtime` int(10) DEFAULT NULL,
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`shop_id`),
  KEY `orderby` (`views`,`score`,`orderby`,`flushtime`),
  KEY `__INDEX` (`cat_id`,`city_id`,`area_id`,`is_vip`,`audit`,`closed`),
  KEY `uid` (`uid`),
  KEY `domain` (`domain`)
) ENGINE=MyISAM AUTO_INCREMENT=194 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_attr`;
CREATE TABLE `jh_shop_attr` (
  `attr_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT '' ,
  `cat_id` mediumint(8) DEFAULT '0' ,
  `multi` enum('Y','N') DEFAULT 'Y' ,
  `filter` enum('Y','N') DEFAULT 'Y' ,
  `orderby` smallint(6) DEFAULT '0' ,
  PRIMARY KEY (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_attr_value`;
CREATE TABLE `jh_shop_attr_value` (
  `attr_value_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT ,
  `attr_id` smallint(6) DEFAULT '0' ,
  `title` varchar(50) DEFAULT '' ,
  `orderby` smallint(6) DEFAULT '50' ,
  PRIMARY KEY (`attr_value_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_banner`;
CREATE TABLE `jh_shop_banner` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0' ,
  `photo` varchar(150) DEFAULT '' ,
  `title` varchar(150) DEFAULT '' ,
  `link` varchar(200) DEFAULT '' ,
  `orderby` smallint(50) DEFAULT '50' ,
  `dateline` int(11) DEFAULT '10',
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_brand`;
CREATE TABLE `jh_shop_brand` (
  `brand_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) DEFAULT '' ,
  `logo` varchar(150) DEFAULT '' ,
  `url` varchar(150) DEFAULT '' ,
  `desc` varchar(255) DEFAULT '' ,
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`brand_id`),
  KEY `audit` (`audit`,`closed`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_cate`;
CREATE TABLE `jh_shop_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `parent_id` mediumint(8) DEFAULT '0',
  `brand_ids` varchar(200) DEFAULT '',
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(200) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=353 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_comment`;
CREATE TABLE `jh_shop_comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `shop_id` mediumint(8) unsigned DEFAULT '0',
  `uid` mediumint(8) unsigned DEFAULT '0',
  `score` tinyint(1) unsigned DEFAULT '1' ,
  `content` varchar(255) DEFAULT '' ,
  `reply` varchar(255) DEFAULT '' ,
  `replyip` varchar(15) DEFAULT '' ,
  `replytime` int(10) DEFAULT '0' ,
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_coupon`;
CREATE TABLE `jh_shop_coupon` (
  `coupon_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `title` varchar(100) DEFAULT '' ,
  `photo` varchar(150) DEFAULT '' ,
  `money` smallint(6) DEFAULT '0' ,
  `min_amount` mediumint(8) DEFAULT '0' ,
  `content` mediumtext ,
  `stime` int(10) DEFAULT '0' ,
  `ltime` int(10) DEFAULT '0' ,
  `views` mediumint(8) DEFAULT '0' ,
  `downloads` mediumint(8) DEFAULT '0' ,
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`coupon_id`),
  KEY `shop_id` (`shop_id`,`audit`,`closed`,`ltime`,`orderby`),
  KEY `city_id` (`city_id`,`audit`,`closed`,`ltime`,`orderby`,`downloads`,`area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_coupon_download`;
CREATE TABLE `jh_shop_coupon_download` (
  `download_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT NULL,
  `shop_id` mediumint(8) DEFAULT '0',
  `contact` varchar(20) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `number` varchar(20) DEFAULT '' ,
  `used` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(1024) DEFAULT '',
  `clientip` char(15) DEFAULT '0.0.0.0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`download_id`),
  KEY `coupon_id` (`coupon_id`),
  KEY `shop_id` (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_fields`;
CREATE TABLE `jh_shop_fields` (
  `shop_id` mediumint(8) NOT NULL DEFAULT '0',
  `banner` varchar(150) DEFAULT '',
  `fox` varchar(20) DEFAULT '' ,
  `mail` varchar(50) DEFAULT '' ,
  `qq` varchar(50) DEFAULT '' ,
  `hours` varchar(50) DEFAULT NULL ,
  `addr` varchar(255) DEFAULT '' ,
  `jiaotong` varchar(255) DEFAULT '' ,
  `bulletin` varchar(255) DEFAULT '' ,
  `info` mediumtext ,
  `psaz` mediumtext ,
  `dgxz` mediumtext ,
  `skin` varchar(50) DEFAULT '' ,
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(200) DEFAULT '',
  `seo_description` varchar(200) DEFAULT '',
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_mendian`;
CREATE TABLE `jh_shop_mendian` (
  `mendian_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `title` varchar(150) DEFAULT '',
  `desc` varchar(255) DEFAULT NULL,
  `thumb` varchar(150) DEFAULT NULL,
  `addr` varchar(150) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `content` mediumtext,
  `views` mediumint(8) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`mendian_id`),
  KEY `shop_id` (`shop_id`,`audit`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_money`;
CREATE TABLE `jh_shop_money` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT '0.00' ,
  `log` varchar(200) DEFAULT '',
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_news`;
CREATE TABLE `jh_shop_news` (
  `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT NULL,
  `shop_id` mediumint(8) DEFAULT '0',
  `from` enum('news','active') DEFAULT 'news',
  `title` varchar(150) DEFAULT '',
  `content` mediumtext,
  `views` mediumint(8) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`news_id`),
  KEY `shop_id` (`shop_id`,`audit`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_pay`;
CREATE TABLE `jh_shop_pay` (
  `shop_id` mediumint(8) NOT NULL,
  `thumb` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `stime` int(10) DEFAULT NULL,
  `ltime` int(10) DEFAULT NULL,
  `order` int(10) DEFAULT '0',
  `num` int(5) DEFAULT '0',
  `order_by` int(5) DEFAULT '50',
  `createtime` int(10) DEFAULT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_service`;
CREATE TABLE `jh_shop_service` (
  `shop_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `zhizhao` enum('Y','N') DEFAULT 'N',
  `A` enum('Y','N') DEFAULT 'N',
  `B` enum('Y','N') DEFAULT 'N',
  `C` enum('Y','N') DEFAULT 'N',
  `D` enum('Y','N') DEFAULT 'N',
  `E` enum('Y','N') DEFAULT 'N',
  `F` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_vcate`;
CREATE TABLE `jh_shop_vcate` (
  `vcat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` mediumint(8) DEFAULT '0',
  `title` varchar(100) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`vcat_id`),
  KEY `shop_id` (`shop_id`,`orderby`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_shop_yuyue`;
CREATE TABLE `jh_shop_yuyue` (
  `yuyue_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0' ,
  `shop_id` mediumint(8) DEFAULT '0' ,
  `product_id` int(10) DEFAULT '0' ,
  `contact` varchar(20) DEFAULT '' ,
  `mobile` varchar(15) DEFAULT '' ,
  `address` varchar(150) DEFAULT '' ,
  `note` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(1024) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`yuyue_id`),
  KEY `__INDEX` (`uid`,`shop_id`,`status`,`dateline`,`city_id`),
  KEY `shop_id` (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_sms_log`;
CREATE TABLE `jh_sms_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mobile` varchar(50) DEFAULT '',
  `content` varchar(255) DEFAULT '',
  `sms` varchar(20) DEFAULT '',
  `status` tinyint(1) DEFAULT '0',
  `clientip` char(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=658 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_supervist`;
CREATE TABLE `jh_supervist` (
  `supervist_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `area_id` smallint(6) DEFAULT NULL,
  `name` varchar(50) DEFAULT '',
  `qq` varchar(15) DEFAULT '',
  `thumb` varchar(150) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT '',
  `views` mediumint(8) DEFAULT '0',
  `about` mediumtext,
  `orderby` smallint(6) DEFAULT '50',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`supervist_id`),
  KEY `__INDEX` (`city_id`,`closed`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=223 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_supervist_attr`;
CREATE TABLE `jh_supervist_attr` (
  `supervist_id` mediumint(8) NOT NULL DEFAULT '0',
  `attr_id` smallint(6) DEFAULT '0',
  `attr_value_id` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`supervist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_system_config`;
CREATE TABLE `jh_system_config` (
  `k` varchar(30) NOT NULL,
  `v` mediumtext,
  `title` varchar(30) DEFAULT '',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_system_logs`;
CREATE TABLE `jh_system_logs` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin` varchar(30) DEFAULT '' ,
  `action` varchar(50) DEFAULT '' ,
  `title` varchar(255) DEFAULT '',
  `content` mediumtext,
  `dateline` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_system_module`;
CREATE TABLE `jh_system_module` (
  `mod_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `module` enum('top','menu','module') DEFAULT 'module' ,
  `level` tinyint(1) DEFAULT '3',
  `ctl` varchar(20) DEFAULT '',
  `act` varchar(20) DEFAULT '',
  `title` varchar(20) DEFAULT '',
  `visible` tinyint(1) DEFAULT '1' ,
  `parent_id` smallint(6) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`mod_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1280 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_systmpl`;
CREATE TABLE `jh_systmpl` (
  `systmpl_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `from` enum('seo','sms','mail') DEFAULT NULL ,
  `key` varchar(50) DEFAULT '' ,
  `intro` varchar(1024) DEFAULT NULL,
  `tmpl` mediumtext ,
  `tmpl1` mediumtext,
  `tmpl2` mediumtext,
  `dateline` int(10) DEFAULT '0',
  `is_open` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`systmpl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders`;
CREATE TABLE `jh_tenders` (
  `tenders_id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` enum('TZX','TBJ','TSJ','TJC','ZXB','TZB','TBJ','TWX','TLF') DEFAULT 'TZX',
  `zxb_id` mediumint(8) DEFAULT '0' ,
  `city_id` smallint(6) DEFAULT '0',
  `area_id` mediumint(8) DEFAULT '0',
  `title` varchar(255) DEFAULT '',
  `uid` mediumint(8) DEFAULT '0',
  `contact` varchar(32) DEFAULT '',
  `mobile` varchar(11) DEFAULT '',
  `home_id` mediumint(8) DEFAULT '0',
  `home_name` varchar(64) DEFAULT '',
  `way_id` smallint(6) DEFAULT '0' ,
  `type_id` smallint(5) DEFAULT '0' ,
  `style_id` smallint(5) DEFAULT '0' ,
  `fenxiaoid` mediumint(8) DEFAULT NULL,
  `budget_id` smallint(5) DEFAULT '0' ,
  `service_id` smallint(5) DEFAULT '0' ,
  `house_type_id` smallint(5) DEFAULT '0' ,
  `house_mj` mediumint(8) DEFAULT '0' ,
  `huxing` varchar(150) DEFAULT '' ,
  `addr` varchar(255) DEFAULT '' ,
  `comment` varchar(1024) DEFAULT '' ,
  `zx_time` int(10) DEFAULT '0' ,
  `tx_time` int(10) DEFAULT '0' ,
  `gold` mediumint(8) DEFAULT '0',
  `max_look` tinyint(3) DEFAULT '3' ,
  `looks` tinyint(3) DEFAULT '0' ,
  `views` mediumint(10) DEFAULT '0',
  `tracks` smallint(6) DEFAULT '0' ,
  `new_track` smallint(6) DEFAULT '0' ,
  `sign_uid` mediumint(8) DEFAULT '0' ,
  `sign_from` enum('company','gz','designer','mechanic','shop') DEFAULT 'company',
  `sign_company_id` mediumint(8) DEFAULT '0' ,
  `sign_info` varchar(1024) DEFAULT '',
  `sign_time` int(10) DEFAULT '0' ,
  `status` tinyint(1) DEFAULT '0' ,
  `remark` varchar(1024) DEFAULT '',
  `audit` tinyint(1) DEFAULT '0' ,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  `level` int(10) DEFAULT NULL,
  PRIMARY KEY (`tenders_id`),
  KEY `city_id` (`city_id`,`audit`)
) ENGINE=MyISAM AUTO_INCREMENT=747 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders_attr`;
CREATE TABLE `jh_tenders_attr` (
  `tenders_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(6) unsigned DEFAULT '0',
  `attr_value_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tenders_id`,`attr_value_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders_log`;
CREATE TABLE `jh_tenders_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenders_id` mediumint(8) DEFAULT '0',
  `tx_time` int(10) DEFAULT '0' ,
  `status` tinyint(1) DEFAULT '0' ,
  `remark` mediumtext ,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders_look`;
CREATE TABLE `jh_tenders_look` (
  `look_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tenders_id` mediumint(8) DEFAULT NULL,
  `city_id` smallint(6) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `from` enum('company','gz','designer','mechanic','shop') DEFAULT 'company',
  `company_id` mediumint(8) DEFAULT '0',
  `info` varchar(1024) DEFAULT '',
  `is_signed` tinyint(1) DEFAULT '0',
  `content` varchar(255) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`look_id`),
  UNIQUE KEY `tenders_id` (`tenders_id`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders_setting`;
CREATE TABLE `jh_tenders_setting` (
  `setting_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) DEFAULT '0',
  `name` varchar(32) DEFAULT NULL,
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`setting_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_tenders_track`;
CREATE TABLE `jh_tenders_track` (
  `track_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `look_id` mediumint(8) DEFAULT '0',
  `content` varchar(1024) DEFAULT '',
  `reply` varchar(1024) DEFAULT '',
  `replyip` varchar(15) DEFAULT '',
  `replytime` int(10) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`track_id`),
  KEY `look_id` (`look_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_themes`;
CREATE TABLE `jh_themes` (
  `theme_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `theme` varchar(50) DEFAULT '',
  `title` varchar(50) DEFAULT '',
  `thumb` varchar(150) DEFAULT '',
  `config` mediumtext,
  `default` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`theme_id`),
  KEY `theme` (`theme`,`default`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_themes_bak`;
CREATE TABLE `jh_themes_bak` (
  `bak_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `admin` varchar(30) DEFAULT '' ,
  `tmpl` varchar(150) DEFAULT '' ,
  `content` mediumtext ,
  `dateline` int(10) DEFAULT NULL ,
  PRIMARY KEY (`bak_id`)
) ENGINE=MyISAM AUTO_INCREMENT=192 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_topics`;
CREATE TABLE `jh_topics` (
  `topics_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL ,
  `card` char(50) DEFAULT '0' ,
  `education` smallint(3) unsigned DEFAULT NULL ,
  `marriage` smallint(3) unsigned DEFAULT NULL ,
  `city_id` mediumint(8) DEFAULT NULL,
  `area_id` mediumint(8) DEFAULT NULL,
  `addr` mediumtext ,
  `work` varchar(100) DEFAULT NULL ,
  `c_addr` mediumtext ,
  `c_mobile` varchar(20) DEFAULT NULL ,
  `position` varchar(50) DEFAULT NULL ,
  `home_person` varchar(100) DEFAULT NULL ,
  `home_relationship` smallint(3) DEFAULT NULL ,
  `home_phone` char(20) DEFAULT NULL ,
  `orter_person` varchar(100) DEFAULT NULL ,
  `orter_relationship` smallint(3) DEFAULT '0' ,
  `orter_phone` varchar(20) DEFAULT NULL ,
  `photo1` varchar(200) DEFAULT NULL ,
  `photo2` varchar(200) DEFAULT NULL ,
  `photo3` varchar(200) DEFAULT NULL ,
  `bank` smallint(3) DEFAULT NULL ,
  `bank_card` varchar(30) DEFAULT NULL ,
  `mobile` varchar(30) DEFAULT NULL ,
  `audit` tinyint(1) DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL ,
  `dateline` int(10) DEFAULT '0',
  `money` mediumint(8) DEFAULT NULL ,
  `zq` smallint(3) DEFAULT NULL ,
  PRIMARY KEY (`topics_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_truste`;
CREATE TABLE `jh_truste` (
  `truste_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `cate_id` mediumint(8) NOT NULL,
  `budget` mediumint(8) NOT NULL,
  `truste` mediumint(8) NOT NULL,
  `is_pay` tinyint(1) DEFAULT '0',
  `uid` mediumint(8) NOT NULL,
  `city_id` mediumint(8) DEFAULT NULL,
  `area_id` mediumint(8) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `looks` smallint(5) DEFAULT '0',
  `max_look` smallint(5) DEFAULT NULL,
  `sign_from` enum('company','gz','designer','mechanic','shop') DEFAULT NULL,
  `sign_uid` mediumint(8) DEFAULT '0',
  `sign_info` varchar(500) DEFAULT NULL,
  `sign_time` int(10) DEFAULT NULL,
  `sign_company_id` mediumint(8) DEFAULT NULL,
  `comment` varchar(500) DEFAULT NULL,
  `views` mediumint(8) DEFAULT '0',
  `gold` smallint(6) DEFAULT '0',
  `photo` varchar(200) DEFAULT NULL,
  `addr` varchar(500) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `status` smallint(3) DEFAULT '0',
  `title` varchar(200) DEFAULT NULL,
  `comment_id` mediumint(8) DEFAULT NULL,
  `clientip` varchar(15) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`truste_id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_truste_cate`;
CREATE TABLE `jh_truste_cate` (
  `cat_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `parent_id` mediumint(8) DEFAULT '0',
  `seo_title` varchar(150) DEFAULT '',
  `seo_keywords` varchar(255) DEFAULT '',
  `seo_description` varchar(200) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  `audit` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=367 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_truste_look`;
CREATE TABLE `jh_truste_look` (
  `look_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `truste_id` mediumint(8) DEFAULT NULL,
  `city_id` smallint(6) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `from` enum('company','gz','designer','mechanic','shop') DEFAULT 'company',
  `company_id` mediumint(8) DEFAULT '0',
  `info` varchar(1024) DEFAULT '',
  `is_signed` tinyint(1) DEFAULT '0',
  `content` varchar(255) DEFAULT '',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`look_id`),
  UNIQUE KEY `tenders_id` (`truste_id`,`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_upload_photo`;
CREATE TABLE `jh_upload_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(30) DEFAULT '',
  `hash` char(32) DEFAULT '',
  `name` varchar(255) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `size` smallint(6) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`photo_id`),
  KEY `hash` (`hash`)
) ENGINE=MyISAM AUTO_INCREMENT=1398 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_upm_task`;
CREATE TABLE `jh_upm_task` (
  `task_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) DEFAULT '0',
  `title` varchar(80) DEFAULT '' ,
  `photo` varchar(255) DEFAULT '' ,
  `content` varchar(1024) DEFAULT '' ,
  `stime` int(10) DEFAULT '0' ,
  `ltime` int(10) DEFAULT '0' ,
  `uv_num` mediumint(8) DEFAULT '0',
  `uv_credits` smallint(6) DEFAULT '0' ,
  `uv_money` decimal(8,2) DEFAULT '0.00',
  `yuyue_credits` mediumint(8) DEFAULT '0',
  `yuyue_money` decimal(8,2) DEFAULT '0.00',
  `youxiao_credits` mediumint(8) DEFAULT '0',
  `youxiao_money` decimal(8,2) DEFAULT '0.00',
  `liangfang_credits` mediumint(8) DEFAULT '0',
  `liangfang_money` decimal(8,2) DEFAULT '0.00',
  `qiandan_credits` mediumint(8) DEFAULT '0',
  `qiandan_money` decimal(8,2) DEFAULT '0.00',
  `views` int(10) DEFAULT '0',
  `uv_count` mediumint(8) DEFAULT '0',
  `yuyue_count` mediumint(8) DEFAULT '0',
  `liangfang_count` mediumint(8) DEFAULT '0',
  `qiandan_count` mediumint(8) DEFAULT '0',
  `audit` tinyint(1) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`task_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_upm_task_log`;
CREATE TABLE `jh_upm_task_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) DEFAULT '0' ,
  `sale_id` int(10) DEFAULT '0' ,
  `pmid` varchar(10) DEFAULT '' ,
  `yuyue_id` int(10) DEFAULT '0',
  `yuyue_status` tinyint(1) DEFAULT '0' ,
  `wx_openid` varchar(50) DEFAULT '',
  `hash` char(8) DEFAULT '' ,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`log_id`),
  KEY `yuyue_id` (`yuyue_id`,`yuyue_status`),
  KEY `company_id` (`company_id`),
  KEY `pmid` (`sale_id`,`pmid`),
  KEY `dateline` (`dateline`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_verify`;
CREATE TABLE `jh_verify` (
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `from` enum('designer','company') DEFAULT NULL,
  `id_photo` varchar(150) DEFAULT '',
  `verify` tinyint(1) DEFAULT '0',
  `qualifications` smallint(3) DEFAULT '0',
  `grade` smallint(3) DEFAULT NULL,
  `verify_time` int(10) DEFAULT '0',
  `request_ip` varchar(15) DEFAULT '0.0.0.0',
  `request_time` int(10) DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin`;
CREATE TABLE `jh_weixin` (
  `wx_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) DEFAULT '0',
  `city_id` smallint(6) DEFAULT '0',
  `wx_sid` varchar(50) DEFAULT '' ,
  `wx_name` varchar(50) DEFAULT '',
  `weixin` varchar(50) DEFAULT '',
  `admin` tinyint(1) DEFAULT '0' ,
  `type` tinyint(1) DEFAULT '0' ,
  `face` varchar(255) DEFAULT '',
  `appid` varchar(50) DEFAULT '',
  `secret` varchar(50) DEFAULT '',
  `token` varchar(50) DEFAULT '',
  `access_token` varchar(255) DEFAULT '',
  `expires_in` int(10) DEFAULT '0',
  `addon` mediumtext,
  PRIMARY KEY (`wx_id`),
  KEY `uid` (`uid`),
  KEY `admin` (`city_id`,`admin`),
  KEY `wx_sid` (`wx_sid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_authcode`;
CREATE TABLE `jh_weixin_authcode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `type` varchar(10) DEFAULT NULL,
  `addon` varchar(255) DEFAULT '',
  `status` tinyint(1) DEFAULT '0' ,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10420 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_coupon`;
CREATE TABLE `jh_weixin_coupon` (
  `coupon_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wx_id` varchar(30) DEFAULT '0',
  `keyword` varchar(30) DEFAULT '',
  `title` varchar(50) DEFAULT '',
  `intro` varchar(255) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `stime` int(10) DEFAULT '0',
  `ltime` int(10) DEFAULT '0',
  `use_tips` varchar(1024) DEFAULT '',
  `end_tips` varchar(1024) DEFAULT '',
  `end_photo` varchar(150) DEFAULT '',
  `num` mediumint(8) DEFAULT '0' ,
  `max_count` mediumint(8) DEFAULT '0',
  `down_count` mediumint(8) DEFAULT '0',
  `use_count` mediumint(8) DEFAULT '0',
  `views` int(10) DEFAULT '0',
  `follower_condtion` tinyint(1) DEFAULT '0' ,
  `member_condtion` tinyint(1) DEFAULT NULL,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`coupon_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_couponsn`;
CREATE TABLE `jh_weixin_couponsn` (
  `sn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coupon` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `wx_id` varchar(30) DEFAULT '0',
  `openid` varchar(150) DEFAULT '',
  `nickname` varchar(50) DEFAULT NULL,
  `sn` varchar(15) DEFAULT '',
  `is_use` tinyint(1) DEFAULT '0',
  `use_time` int(10) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sn_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_goldegg`;
CREATE TABLE `jh_weixin_goldegg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `predict_num` int(11) NOT NULL ,
  `wx_id` varchar(30) NOT NULL,
  `keyword` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL ,
  `title` varchar(60) NOT NULL ,
  `use_tips` varchar(200) NOT NULL ,
  `stime` int(11) NOT NULL ,
  `ltime` int(11) NOT NULL ,
  `info` varchar(200) NOT NULL ,
  `aginfo` varchar(200) NOT NULL ,
  `end_tips` varchar(60) NOT NULL ,
  `end_photo` varchar(100) NOT NULL,
  `fist` varchar(50) NOT NULL ,
  `fistnums` int(4) NOT NULL ,
  `fistlucknums` int(1) NOT NULL ,
  `second` varchar(50) NOT NULL ,
  `secondnums` int(4) NOT NULL,
  `secondlucknums` int(1) NOT NULL,
  `third` varchar(50) NOT NULL,
  `thirdnums` int(4) NOT NULL,
  `thirdlucknums` int(1) NOT NULL,
  `joinnum` int(10) DEFAULT NULL,
  `max_num` int(2) NOT NULL ,
  `parssword` int(15) NOT NULL ,
  `four` varchar(50) NOT NULL,
  `fournums` int(11) NOT NULL,
  `fourlucknums` int(11) NOT NULL,
  `five` varchar(50) NOT NULL,
  `fivenums` int(11) NOT NULL,
  `fivelucknums` int(11) NOT NULL,
  `six` varchar(50) NOT NULL ,
  `sixnums` int(11) NOT NULL,
  `sixlucknums` int(11) NOT NULL,
  `daynums` mediumint(4) NOT NULL DEFAULT '0',
  `member_condtion` tinyint(1) NOT NULL DEFAULT '0',
  `dateline` int(10) NOT NULL,
  `follower_condtion` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`wx_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_goldeggsn`;
CREATE TABLE `jh_weixin_goldeggsn` (
  `sn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `egg_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `wx_id` varchar(30) DEFAULT '0',
  `openid` varchar(150) DEFAULT '',
  `nickname` varchar(50) DEFAULT NULL,
  `sn` varchar(15) DEFAULT '',
  `is_use` tinyint(1) DEFAULT '0',
  `use_time` int(10) DEFAULT '0',
  `isegg` tinyint(1) DEFAULT NULL,
  `prize` varchar(50) DEFAULT NULL,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sn_id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_help`;
CREATE TABLE `jh_weixin_help` (
  `help_id` int(10) unsigned NOT NULL AUTO_INCREMENT ,
  `wx_id` varchar(30) DEFAULT '0',
  `keyword` varchar(50) NOT NULL DEFAULT '' ,
  `title` varchar(80) NOT NULL DEFAULT '' ,
  `intro` varchar(1024) NOT NULL DEFAULT '' ,
  `photo` varchar(150) NOT NULL DEFAULT '' ,
  `stime` int(10) NOT NULL DEFAULT '0' ,
  `ltime` int(10) NOT NULL DEFAULT '0' ,
  `use_tips` varchar(1024) NOT NULL DEFAULT '' ,
  `end_tips` varchar(1204) NOT NULL ,
  `predict_num` int(10) unsigned NOT NULL DEFAULT '0' ,
  `max_num` int(10) unsigned NOT NULL DEFAULT '1' ,
  `follower_condtion` tinyint(1) NOT NULL DEFAULT '0' ,
  `member_condtion` tinyint(1) NOT NULL DEFAULT '0',
  `collect_count` int(10) unsigned NOT NULL DEFAULT '0' ,
  `views` int(10) unsigned NOT NULL DEFAULT '0' ,
  `end_photo` varchar(150) NOT NULL DEFAULT '' ,
  `lastupdate` int(10) NOT NULL DEFAULT '0' ,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`help_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_helplist`;
CREATE TABLE `jh_weixin_helplist` (
  `list_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `openid` varchar(150) DEFAULT NULL,
  `help_id` mediumint(8) DEFAULT NULL,
  `wx_id` varchar(30) DEFAULT NULL,
  `zhuliid` varchar(50) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`list_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_helpprize`;
CREATE TABLE `jh_weixin_helpprize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT ,
  `help_id` int(10) unsigned NOT NULL ,
  `title` varchar(255) NOT NULL ,
  `name` varchar(255) NOT NULL ,
  `num` int(10) unsigned NOT NULL ,
  `sort` int(10) unsigned NOT NULL DEFAULT '0' ,
  `photo` varchar(225) NOT NULL ,
  `wx_id` varchar(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_helpsn`;
CREATE TABLE `jh_weixin_helpsn` (
  `sn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `help_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `wx_id` varchar(30) DEFAULT '0',
  `openid` varchar(150) DEFAULT '',
  `nickname` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `zhuanfa` mediumint(8) DEFAULT '0',
  `zhuli` mediumint(8) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sn_id`),
  UNIQUE KEY `openid` (`openid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_keyword`;
CREATE TABLE `jh_weixin_keyword` (
  `kw_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `wx_id` mediumint(8) DEFAULT '0',
  `wx_sid` varchar(50) DEFAULT '',
  `keyword` varchar(30) DEFAULT NULL,
  `plugin` varchar(50) DEFAULT NULL,
  `len` tinyint(3) DEFAULT '0',
  `type` varchar(30) DEFAULT 'text',
  `reply_id` mediumint(8) DEFAULT '0',
  `content` varchar(255) DEFAULT '',
  `hits` mediumint(8) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`kw_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_log`;
CREATE TABLE `jh_weixin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weixin` varchar(50) DEFAULT '',
  `data` mediumtext,
  `post` mediumtext,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_lottery`;
CREATE TABLE `jh_weixin_lottery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `predict_num` int(11) NOT NULL ,
  `views` int(11) NOT NULL,
  `wx_id` varchar(30) NOT NULL,
  `keyword` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL ,
  `title` varchar(60) NOT NULL ,
  `txt` varchar(60) NOT NULL ,
  `use_tips` varchar(200) NOT NULL ,
  `stime` int(11) NOT NULL ,
  `ltime` int(11) NOT NULL ,
  `info` varchar(200) NOT NULL ,
  `aginfo` varchar(200) NOT NULL ,
  `end_tips` varchar(60) NOT NULL ,
  `end_photo` varchar(100) NOT NULL,
  `fist` varchar(50) NOT NULL ,
  `fistnums` int(4) NOT NULL ,
  `fistlucknums` int(1) NOT NULL ,
  `second` varchar(50) NOT NULL ,
  `secondnums` int(4) NOT NULL,
  `secondlucknums` int(1) NOT NULL,
  `third` varchar(50) NOT NULL,
  `thirdnums` int(4) NOT NULL,
  `thirdlucknums` int(1) NOT NULL,
  `allpeople` varchar(30) NOT NULL DEFAULT '' ,
  `joinnum` int(10) DEFAULT NULL,
  `max_num` int(2) NOT NULL ,
  `parssword` int(15) NOT NULL ,
  `four` varchar(50) NOT NULL,
  `fournums` int(11) NOT NULL,
  `fourlucknums` int(11) NOT NULL,
  `five` varchar(50) NOT NULL,
  `fivenums` int(11) NOT NULL,
  `fivelucknums` int(11) NOT NULL,
  `six` varchar(50) NOT NULL ,
  `sixnums` int(11) NOT NULL,
  `sixlucknums` int(11) NOT NULL,
  `daynums` mediumint(4) NOT NULL DEFAULT '0',
  `member_condtion` tinyint(1) NOT NULL DEFAULT '0',
  `dateline` int(10) NOT NULL,
  `follower_condtion` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`wx_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_lotterysn`;
CREATE TABLE `jh_weixin_lotterysn` (
  `sn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lottery_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `wx_id` varchar(30) DEFAULT '0',
  `openid` varchar(150) DEFAULT '',
  `nickname` varchar(50) DEFAULT NULL,
  `sn` varchar(15) DEFAULT '',
  `is_use` tinyint(1) DEFAULT '0',
  `use_time` int(10) DEFAULT '0',
  `islottery` tinyint(1) DEFAULT NULL,
  `prize` varchar(50) DEFAULT NULL,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sn_id`)
) ENGINE=MyISAM AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_menu`;
CREATE TABLE `jh_weixin_menu` (
  `menu_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT '',
  `parent_id` mediumint(8) DEFAULT '0',
  `wx_id` mediumint(8) DEFAULT '0',
  `wx_sid` varchar(50) DEFAULT '',
  `type` enum('reply','text','link') DEFAULT 'text',
  `reply_id` mediumint(8) DEFAULT '0',
  `content` varchar(255) DEFAULT '',
  `link` varchar(255) DEFAULT '',
  `orderby` smallint(6) DEFAULT '0',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_msite`;
CREATE TABLE `jh_weixin_msite` (
  `wx_id` mediumint(8) NOT NULL,
  `title` varchar(80) DEFAULT '',
  `photo` varchar(255) DEFAULT '',
  `intro` varchar(255) DEFAULT '',
  `tmpl_index` varchar(80) DEFAULT NULL,
  `tmpl_lists` varchar(80) DEFAULT NULL,
  `tmpl_detail` varchar(80) DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`wx_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_msite_article`;
CREATE TABLE `jh_weixin_msite_article` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) DEFAULT '0',
  `wx_id` mediumint(8) DEFAULT '0',
  `title` varchar(80) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `intro` varchar(255) DEFAULT '',
  `content` mediumtext,
  `link` varchar(255) DEFAULT '',
  `views` mediumint(8) DEFAULT '0',
  `orderby` smallint(6) DEFAULT '50',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_msite_banner`;
CREATE TABLE `jh_weixin_msite_banner` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wx_id` mediumint(8) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `photo` varchar(255) DEFAULT '',
  `link` varchar(255) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_msite_cate`;
CREATE TABLE `jh_weixin_msite_cate` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wx_id` mediumint(8) DEFAULT '0',
  `title` varchar(50) DEFAULT '',
  `link` varchar(255) DEFAULT '' ,
  `icon` varchar(255) DEFAULT '',
  `orderby` smallint(6) DEFAULT '50',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_packet`;
CREATE TABLE `jh_weixin_packet` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wx_id` char(25) NOT NULL,
  `title` char(40) NOT NULL,
  `keyword` char(30) NOT NULL,
  `msg_pic` char(120) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `info` text NOT NULL,
  `start_time` char(11) NOT NULL,
  `end_time` char(11) NOT NULL,
  `ext_total` mediumint(8) unsigned NOT NULL,
  `get_number` smallint(5) unsigned NOT NULL,
  `value_count` mediumint(8) unsigned NOT NULL,
  `is_open` enum('0','1') NOT NULL,
  `item_num` mediumint(9) NOT NULL,
  `item_sum` mediumint(9) NOT NULL,
  `item_max` mediumint(9) NOT NULL,
  `item_unit` varchar(30) NOT NULL,
  `packet_type` enum('1','2') NOT NULL,
  `deci` smallint(6) NOT NULL,
  `people` mediumint(9) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_packetling`;
CREATE TABLE `jh_weixin_packetling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wx_id` char(25) NOT NULL,
  `open_id` char(50) NOT NULL,
  `packet_id` int(11) NOT NULL,
  `price` char(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `type_name` char(45) NOT NULL,
  `time` char(11) NOT NULL,
  `sn_id` text NOT NULL,
  `mobile` char(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_packetling_copy`;
CREATE TABLE `jh_weixin_packetling_copy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wx_id` char(25) NOT NULL,
  `open_id` char(50) NOT NULL,
  `packet_id` int(11) NOT NULL,
  `price` char(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `type_name` char(45) NOT NULL,
  `time` char(11) NOT NULL,
  `sn_id` text NOT NULL,
  `mobile` char(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_packetsn`;
CREATE TABLE `jh_weixin_packetsn` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `add_time` char(11) NOT NULL,
  `wx_id` char(25) NOT NULL,
  `packet_id` int(11) NOT NULL,
  `prize_id` int(11) NOT NULL,
  `prize_name` char(40) NOT NULL,
  `worth` decimal(10,2) NOT NULL,
  `is_reward` enum('0','1','2') NOT NULL,
  `type` enum('1','2') NOT NULL,
  `code` char(40) NOT NULL,
  `open_id` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_prize`;
CREATE TABLE `jh_weixin_prize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT ,
  `scratch_id` int(10) unsigned NOT NULL ,
  `title` varchar(255) NOT NULL ,
  `name` varchar(255) NOT NULL ,
  `num` int(10) unsigned NOT NULL ,
  `sort` int(10) unsigned NOT NULL DEFAULT '0' ,
  `photo` varchar(225) NOT NULL ,
  `wx_id` varchar(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_relay`;
CREATE TABLE `jh_weixin_relay` (
  `relay_id` int(10) unsigned NOT NULL AUTO_INCREMENT ,
  `wx_id` varchar(30) DEFAULT '0',
  `keyword` varchar(50) NOT NULL DEFAULT '' ,
  `title` varchar(80) NOT NULL DEFAULT '' ,
  `intro` varchar(1024) NOT NULL DEFAULT '' ,
  `photo` varchar(150) NOT NULL DEFAULT '' ,
  `stime` int(10) NOT NULL DEFAULT '0' ,
  `ltime` int(10) NOT NULL DEFAULT '0' ,
  `use_tips` varchar(1024) NOT NULL DEFAULT '' ,
  `end_tips` varchar(1204) NOT NULL ,
  `relay_num` int(10) unsigned NOT NULL DEFAULT '0' ,
  `max_num` int(10) unsigned NOT NULL DEFAULT '0' ,
  `max_gold` mediumint(8) DEFAULT NULL,
  `min_gold` mediumint(8) DEFAULT '30',
  `time` mediumint(8) DEFAULT '30',
  `follower_condtion` tinyint(1) NOT NULL DEFAULT '0' ,
  `member_condtion` tinyint(1) NOT NULL DEFAULT '0',
  `collect_count` int(10) unsigned NOT NULL DEFAULT '0' ,
  `views` int(10) unsigned NOT NULL DEFAULT '0' ,
  `end_photo` varchar(150) NOT NULL DEFAULT '' ,
  `lastupdate` int(10) NOT NULL DEFAULT '0' ,
  `max_price` int(10) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`relay_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_relaylist`;
CREATE TABLE `jh_weixin_relaylist` (
  `list_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `openid` varchar(150) DEFAULT NULL,
  `relay_id` mediumint(8) DEFAULT NULL,
  `wx_id` varchar(30) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '1',
  `jieliid` varchar(50) DEFAULT NULL,
  `gold` mediumint(8) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`list_id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_relayprize`;
CREATE TABLE `jh_weixin_relayprize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT ,
  `relay_id` int(10) unsigned NOT NULL ,
  `title` varchar(255) NOT NULL ,
  `name` varchar(255) NOT NULL ,
  `num` int(10) unsigned NOT NULL ,
  `sort` int(10) unsigned NOT NULL DEFAULT '0' ,
  `photo` varchar(225) NOT NULL ,
  `wx_id` varchar(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_relaysn`;
CREATE TABLE `jh_weixin_relaysn` (
  `sn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `relay_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `wx_id` varchar(30) DEFAULT '0',
  `openid` varchar(150) DEFAULT '',
  `nickname` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `cishu` mediumint(8) DEFAULT '0',
  `gold` mediumint(8) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sn_id`),
  UNIQUE KEY `openid` (`openid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_reply`;
CREATE TABLE `jh_weixin_reply` (
  `reply_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `wx_id` mediumint(8) DEFAULT '0',
  `title` varchar(80) DEFAULT '',
  `intro` varchar(255) DEFAULT '',
  `photo` varchar(150) DEFAULT '',
  `jumpurl` varchar(255) DEFAULT '',
  `content` mediumtext,
  `views` mediumint(8) DEFAULT '0',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`reply_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_scratch`;
CREATE TABLE `jh_weixin_scratch` (
  `scratch_id` int(10) unsigned NOT NULL AUTO_INCREMENT ,
  `wx_id` varchar(30) DEFAULT '0',
  `keyword` varchar(50) NOT NULL DEFAULT '' ,
  `title` varchar(80) NOT NULL DEFAULT '' ,
  `intro` varchar(1024) NOT NULL DEFAULT '' ,
  `photo` varchar(150) NOT NULL DEFAULT '' ,
  `stime` int(10) NOT NULL DEFAULT '0' ,
  `ltime` int(10) NOT NULL DEFAULT '0' ,
  `use_tips` varchar(1024) NOT NULL DEFAULT '' ,
  `end_tips` varchar(1204) NOT NULL ,
  `predict_num` int(10) unsigned NOT NULL DEFAULT '0' ,
  `max_num` int(10) unsigned NOT NULL DEFAULT '1' ,
  `follower_condtion` tinyint(1) NOT NULL DEFAULT '0' ,
  `member_condtion` tinyint(1) NOT NULL DEFAULT '0',
  `collect_count` int(10) unsigned NOT NULL DEFAULT '0' ,
  `views` int(10) unsigned NOT NULL DEFAULT '0' ,
  `end_photo` varchar(150) NOT NULL DEFAULT '' ,
  `lastupdate` int(10) NOT NULL DEFAULT '0' ,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`scratch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_scratchsn`;
CREATE TABLE `jh_weixin_scratchsn` (
  `sn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `scratch_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `wx_id` varchar(30) DEFAULT '0',
  `openid` varchar(150) DEFAULT '',
  `nickname` varchar(50) DEFAULT NULL,
  `sn` varchar(15) DEFAULT '',
  `is_use` tinyint(1) DEFAULT '0',
  `use_time` int(10) DEFAULT '0',
  `prize_id` int(10) DEFAULT NULL,
  `prize_title` varchar(50) DEFAULT NULL,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sn_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_shake`;
CREATE TABLE `jh_weixin_shake` (
  `shake_id` int(10) unsigned NOT NULL AUTO_INCREMENT ,
  `wx_id` varchar(255) DEFAULT '',
  `keyword` varchar(50) NOT NULL DEFAULT '' ,
  `title` varchar(80) NOT NULL DEFAULT '' ,
  `intro` varchar(1024) NOT NULL DEFAULT '' ,
  `photo` varchar(150) NOT NULL DEFAULT '' ,
  `stime` int(10) DEFAULT '0' ,
  `ltime` int(10) DEFAULT NULL ,
  `use_tips` varchar(1024) NOT NULL DEFAULT '' ,
  `end_tips` varchar(1204) NOT NULL ,
  `predict_num` int(10) unsigned NOT NULL DEFAULT '0' ,
  `max_num` int(10) unsigned NOT NULL DEFAULT '1' ,
  `follower_condtion` tinyint(1) NOT NULL DEFAULT '0' ,
  `member_condtion` tinyint(1) NOT NULL DEFAULT '0',
  `collect_count` int(10) unsigned NOT NULL DEFAULT '0' ,
  `views` int(10) unsigned NOT NULL DEFAULT '0' ,
  `end_photo` varchar(150) NOT NULL DEFAULT '' ,
  `lastupdate` int(10) NOT NULL DEFAULT '0' ,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0' ,
  PRIMARY KEY (`shake_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_shakeprize`;
CREATE TABLE `jh_weixin_shakeprize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT ,
  `shake_id` int(10) unsigned NOT NULL ,
  `title` varchar(255) NOT NULL ,
  `name` varchar(255) NOT NULL ,
  `num` int(10) unsigned NOT NULL ,
  `sort` int(10) unsigned NOT NULL DEFAULT '0' ,
  `photo` varchar(225) NOT NULL ,
  `wx_id` varchar(255) NOT NULL ,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_shakesn`;
CREATE TABLE `jh_weixin_shakesn` (
  `sn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shake_id` int(10) DEFAULT '0',
  `uid` mediumint(8) DEFAULT '0',
  `wx_id` varchar(30) DEFAULT '0',
  `openid` varchar(150) DEFAULT '',
  `nickname` varchar(50) DEFAULT NULL,
  `sn` varchar(15) DEFAULT '',
  `is_use` tinyint(1) DEFAULT '0',
  `use_time` int(10) DEFAULT '0',
  `prize_id` int(10) DEFAULT NULL,
  `prize_title` varchar(50) DEFAULT NULL,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`sn_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_tenders`;
CREATE TABLE `jh_weixin_tenders` (
  `tenders_id` int(10) NOT NULL DEFAULT '0',
  `openid` varchar(50) DEFAULT '',
  PRIMARY KEY (`tenders_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_weixin_tmplmsg`;
CREATE TABLE `jh_weixin_tmplmsg` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(30) DEFAULT '',
  `title` varchar(30) DEFAULT '',
  `TMID` varchar(30) DEFAULT '',
  `tmpl` mediumtext,
  `template_id` varchar(255) DEFAULT '',
  `topcolor` varchar(10) DEFAULT '',
  `textcolor` varchar(10) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_zxb`;
CREATE TABLE `jh_zxb` (
  `zxb_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` smallint(6) DEFAULT '0',
  `tenders_id` mediumint(8) DEFAULT '0' ,
  `uid` mediumint(8) DEFAULT '0',
  `company_id` mediumint(8) DEFAULT '0',
  `contact` varchar(30) DEFAULT '',
  `mobile` varchar(15) DEFAULT '',
  `comment` varchar(255) DEFAULT '',
  `status` tinyint(3) DEFAULT '0',
  `remark` varchar(255) DEFAULT '',
  `audit` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`zxb_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_zxb_hetong`;
CREATE TABLE `jh_zxb_hetong` (
  `hetong_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `zxb_id` mediumint(8) unsigned DEFAULT NULL,
  `uid` mediumint(8) DEFAULT '0' ,
  `company_id` mediumint(8) DEFAULT '0' ,
  `total_price` mediumint(8) DEFAULT '0' ,
  `hetong` varchar(150) DEFAULT '' ,
  `yezhu` varchar(30) DEFAULT '' ,
  `yezhu_phone` varchar(15) DEFAULT '',
  `yezhu_bank` varchar(150) DEFAULT '',
  `yezhu_status` tinyint(1) DEFAULT '0',
  `yezhu_time` int(10) DEFAULT '0' ,
  `company` varchar(80) DEFAULT '' ,
  `company_phone` varchar(15) DEFAULT '',
  `company_bank` varchar(150) DEFAULT '',
  `company_status` tinyint(1) DEFAULT '0',
  `company_time` int(10) DEFAULT '0' ,
  `status` tinyint(1) DEFAULT '0' ,
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`hetong_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_zxb_photo`;
CREATE TABLE `jh_zxb_photo` (
  `photo_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `zxb_id` mediumint(8) NOT NULL,
  `company_id` mediumint(8) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `step` tinyint(1) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_zxb_plaint`;
CREATE TABLE `jh_zxb_plaint` (
  `plaint_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `zxb_id` mediumint(8) NOT NULL,
  `uid` mediumint(8) DEFAULT NULL,
  `company_id` mediumint(8) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `yezhu_photo` varchar(225) DEFAULT NULL,
  `yezhu_content` mediumtext,
  `yezhu_time` int(10) DEFAULT NULL,
  `company_photo` varchar(225) DEFAULT NULL,
  `company_content` mediumtext,
  `company_time` int(10) DEFAULT NULL,
  `content` mediumtext,
  `status` tinyint(1) DEFAULT NULL,
  `time` int(10) DEFAULT NULL,
  `clientip` varchar(15) DEFAULT NULL,
  `dateline` int(10) DEFAULT NULL,
  PRIMARY KEY (`plaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_zxb_step`;
CREATE TABLE `jh_zxb_step` (
  `step_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `zxb_id` mediumint(8) DEFAULT '0',
  `uid` mediumint(8) DEFAULT NULL,
  `company_id` mediumint(8) DEFAULT NULL,
  `step` tinyint(3) DEFAULT '0',
  `yezhu_photo` varchar(225) DEFAULT NULL,
  `yezhu_content` mediumtext,
  `yezhu_status` tinyint(1) DEFAULT NULL,
  `yezhu_time` int(10) DEFAULT NULL,
  `company_content` mediumtext,
  `company_status` tinyint(1) DEFAULT NULL,
  `company_time` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `content` mediumtext,
  `time` int(10) DEFAULT NULL,
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`step_id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_zxpm_item`;
CREATE TABLE `jh_zxpm_item` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(10) DEFAULT '0' ,
  `content` varchar(255) DEFAULT '' ,
  `photo` varchar(150) DEFAULT '',
  `location` varchar(255) DEFAULT '',
  `status` tinyint(1) DEFAULT '0',
  `closed` tinyint(1) DEFAULT '0',
  `clientip` varchar(15) DEFAULT '',
  `dateline` int(10) DEFAULT '0' ,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `jh_zxpm_photo`;
CREATE TABLE `jh_zxpm_photo` (
  `photo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` int(10) DEFAULT '0',
  `item_id` int(10) DEFAULT '0',
  `photo` varchar(150) DEFAULT '',
  `dateline` int(10) DEFAULT '0',
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
