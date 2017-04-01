# Host: localhost  (Version: 5.5.47)
# Date: 2016-12-23 17:33:18
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "contact"
#

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `title2` varchar(50) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "contact"
#

/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (2,'通过以下方式联系我们','方式不止一种哦','期待中……');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

#
# Structure for table "news"
#

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `uedittext` text,
  `picnamesmall` varchar(50) DEFAULT NULL,
  `title2` varchar(50) DEFAULT NULL,
  `picnamebig` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

#
# Data for table "news"
#

/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (34,'软件开发，网站开发。','&lt;p&gt;网站开发，软件开发。做的人有很多。要怎么选择？选适合自己公司的。如果是做公司展示型的网站。选一家做php开发的公司来做。后台编写程序不复杂。前台页面要做的美观大方。即能展示出自己公司的实力。又能把体现出公司是很用心来做事的。网站做的效果好当然会吸引他人的注意。网站商城这样的网站。前台页面和后台编写程序都很复杂。网站制作工期也会很长。价格也很高。用php编程语言的cms。也就是内容管理系统也能做网站。用它做网站不做会写程序。网站页面得自己做。多数是网站美工人员也就是做网站页面的人用的。做网站用到的技术有很多。前端页面制作要会html、css、js等等。后台编程开发要后写php程序、会用mysql数据库、会用php的各种框架。当然后台编程语言也可以用其它的。有很多选择。&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0057.gif&quot;/&gt;&lt;/p&gt;','small_20161223161936_570.png','按照您的需求开发软件、开发网站。',NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

#
# Structure for table "nowcontact"
#

DROP TABLE IF EXISTS `nowcontact`;
CREATE TABLE `nowcontact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text,
  `mtime` datetime DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "nowcontact"
#

/*!40000 ALTER TABLE `nowcontact` DISABLE KEYS */;
INSERT INTO `nowcontact` VALUES (2,'ã€€2016å¹´è¢«ç§°ä¸ºä¸­å›½ç½‘ç»œç›´æ’­å…ƒå¹´,æ— è®ºæ˜¯ç”¨æˆ·æ•°é‡çš„è¿…çŒ›å¢žé•¿,è¿˜æ˜¯èµ„æœ¬çš„äº‰ç›¸æ¶Œå…¥,ä»¥åŠå„å¤§ç›´æ’­å¹³å°çš„ç›¸ç»§å…¥åœº,éƒ½é¢„ç¤ºç€ç›´æ’­æ—¶ä»£çš„åˆ°æ¥ã€‚æ®äº†è§£,ç»§ç‰µæ‰‹ä¸€ç›´æ’­ã€æŠ±æŠ±ç­‰ç›´æ’­å¹³å°åŽ,èžèµ„æˆåŠŸåŽçš„ç™¾åº¦è§†é¢‘è¿‘æ—¥åˆé™†ç»­ä¸Žæ˜ å®¢ã€å…­é—´æˆ¿ç­‰ç›´æ’­å¹³å°è¾¾æˆå†…å®¹åŠæŠ€æœ¯å±‚é¢çš„æ·±åº¦åˆä½œ,æ¬²æ‰“é€ ä¸šå†…æœ€å¤§çš„ç›´æ’­èšåˆå¹³å°ã€‚','2016-11-02 10:15:37','43gfdsg@126.com'),(3,'ã€€æ•°æ®æ˜¾ç¤º,æˆªè‡³2016å¹´8æœˆ,å¸‚åœºä¸Šçš„ç›´æ’­å¹³å°æ•°é‡å¤šè¾¾200å¤šå®¶,å¸‚åœºè§„æ¨¡è¾¾åˆ°90äº¿,ç”¨æˆ·è§„æ¨¡è¾¾åˆ°3.25äº¿,å ç½‘æ°‘æ€»æ•°45%, ç»†åˆ†å“ç±»åŒ…æ‹¬æ³›å¨±ä¹ã€ä½“è‚²ã€çœŸäººç§€ã€æ¸¸æˆç›´æ’­ã€è´­ç‰©ã€æˆ·å¤–ç›´æ’­ç­‰,æ¯ä¸€ä¸ªåž‚ç›´é¢†åŸŸçš„ç›´æ’­éƒ½æœ‰å‡ å®¶ç›´æ’­å¹³å°åˆ†é£Ÿ','2016-11-02 10:16:08','4535346@126.com'),(4,'ã€€ç›®å‰å›½å†…ç›´æ’­appå¸‚åœºåˆ†æ•£,è¿˜æ²¡æœ‰å½¢æˆèµ¢å®¶é€šåƒçš„å±€é¢ã€‚å°½ç®¡äº’è”ç½‘å·¨å¤´å’Œé£ŽæŠ•ä»¬å·²ç»åœ¨ç›´æ’­è¡Œä¸šç ¸ä¸‹äº†æµ·é‡èµ„é‡‘,ä½†ç›®å‰è¿˜æ²¡æœ‰ä»»ä½•è¿¹è±¡æ˜¾ç¤ºå°‘æ•°å‡ ä¸ªç›´æ’­å¹³å°èƒ½ç­‘èµ·æ¸…æ™°çš„å£åž’æ¥æŠµå¾¡å…¶ä»–ç«žäº‰å¯¹æ‰‹ã€‚','2016-11-02 10:16:34','324234@qq.com'),(5,'ã€€ã€€é’ˆå¯¹ä¼˜è´¨å†…å®¹ç¨€ç¼ºã€åˆ†æ•£ã€è‰¯èŽ ä¸é½ã€æ ‡å‡†ä¸ç»Ÿä¸€ç­‰ç›´æ’­è¡Œä¸šäºŸå¾…è§£å†³çš„é—®é¢˜,ç™¾åº¦è§†é¢‘æ­£å°†â€œç›´æ’­â€æ— ç¼åµŒå…¥åˆ°å·²æœ‰çš„PGCå†…å®¹ç”Ÿæ€ä¸­,æ‰“é€ ä¸šå†…æœ€å¤§çš„ç›´æ’­èšåˆå¹³å°ã€‚ç™¾åº¦è§†é¢‘ä¾æ‰˜ç™¾åº¦å¤§æ•°æ®æŽ¨å‡ºçš„ä¸ªæ€§åŒ–ä¸»æ’­æŽ¨è,æ»¡è¶³äº†ä¸åŒç›´æ’­ç”¨æˆ·ç¾¤ä½“çš„éœ€æ±‚,ç»™ç½‘æ°‘æä¾›äº†æœ€ä¾¿æ·,ä¼˜è´¨çš„ç›´æ’­å†…å®¹ä½“éªŒã€‚æ®äº†è§£,ç™¾åº¦è§†é¢‘é¦–é¡µè®¾ç½®äº†â€œå°åº¦ç›´æ’­â€å…¥å£,å¹¶ä¼šé€šè¿‡æŽ¨èç®—æ³•è‡ªåŠ¨ç”„é€‰ä¼˜è´¨ç›´æ’­å†…å®¹åœ¨ç™¾åº¦è§†é¢‘é¦–é¡µç„¦ç‚¹å›¾ç›´æŽ¥æŽ¨èã€‚ä¸€æ–¹é¢ç™¾åº¦è§†é¢‘å¯ä»¥é€šè¿‡è‡ªèº«ç§»åŠ¨ç«¯Appå·²è¶…è¿‡4äº¿çš„è£…æœºé‡å¸¦æ¥çš„æµ·é‡ç”¨æˆ·è¡Œä¸ºæ•°æ®å’Œâ€œåƒäººåƒé¢â€çš„ä¸ªæ€§åŒ–æŽ¨èç®—æ³•åŒ¹é…ç”¨æˆ·ç”»åƒ,ç›´æŽ¥ä¸ºç›´æ’­å†…å®¹è¾“å…¥ç²¾å‡†æµé‡,å¦ä¸€æ–¹é¢ç™¾åº¦è§†é¢‘ä¹Ÿå¯ä»¥ç›´æŽ¥é€šè¿‡è‡ªèº«å¹³å°èµ„æºå’Œå¤–éƒ¨æŽ¨å¹¿å®Œæˆå¿«é€Ÿå¼•æµ,ä¿è¯ç›´æ’­çš„ä¼ æ’­åŠ›å’Œå½±å“åŠ›,ä¸ºç›´æ’­åˆä½œä¼™ä¼´å¸¦æ¥å¯è§‚çš„æ”¶ç›Šã€‚','2016-11-02 10:16:54','43gfdsg@126.com'),(6,'ã€€ç™¾åº¦è§†é¢‘ä¸Žå¤šå®¶ç›´æ’­åˆä½œä¼™ä¼´å¼ºå¼ºè”åˆ,æ‰“é€ ä¸šå†…æœ€å¤§çš„ç›´æ’­èšåˆå¹³å°,åœ¨ä¿¡æ¯è¿‡å‰©,ç¢Žç‰‡åŒ–é˜…è¯»çš„æ—¶ä»£,æ— ç–‘æ˜¯é¡ºåº”äº’è”ç½‘å‘å±•ã€æå‡ç”¨æˆ·ä½“éªŒçš„è‰¯å‰‚ã€‚ ','2016-11-02 10:17:15','324234@qq.com'),(7,'ã€€ç›®å‰,ç™¾åº¦è§†é¢‘å·²ç»æ˜¯ä¸­å›½æœ€å¤§çš„è§†é¢‘èšåˆã€PGCå†…å®¹æŽ¨èä¸Žåˆ†å‘å¹³å°,æ”¶å½•äº†è¶…è¿‡5.8äº¿æ¡è§†é¢‘å†…å®¹,ç§»åŠ¨ç«¯è¦†ç›–ç”¨æˆ·é‡å·²è¶…è¿‡4äº¿ã€‚ç™¾åº¦è§†é¢‘è‡ªæˆåŠŸèžèµ„ã€ç‹¬ç«‹è¿è¥ä»¥æ¥, ç§¯æžæŽ¨åŠ¨æˆ˜ç•¥è½¬åž‹,é‡ç‚¹å‘åŠ›ä»¥ç›´æ’­ã€PGCã€ä¸ªæ€§åŒ–æŽ¨èä¸ºæ ¸å¿ƒçš„ä¸‰å¤§ä¸šåŠ¡æ–¹å‘, å®Œæˆä»Žâ€œè§†é¢‘æœç´¢èšåˆâ€åˆ°â€œå†…å®¹åˆ†å‘å¹³å°â€çš„åŽä¸½è½¬èº«ã€‚ ','2016-11-02 10:17:30','4535346@126.com'),(8,'fdfefsef','2016-11-04 08:18:13','1254658@qq.com');
/*!40000 ALTER TABLE `nowcontact` ENABLE KEYS */;

#
# Structure for table "pagepic"
#

DROP TABLE IF EXISTS `pagepic`;
CREATE TABLE `pagepic` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `title2` varchar(50) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

#
# Data for table "pagepic"
#

/*!40000 ALTER TABLE `pagepic` DISABLE KEYS */;
INSERT INTO `pagepic` VALUES (27,'软件开发，网站开发。','软件开发，网站开发。根据实际需求开发。网页设计。等等。','软件开发，网站开发。根据实际需求开发。网页设计。等等。本人多年开发经验。懂得java、php编程语言。欢迎留言。','20161223151407_888.jpg');
/*!40000 ALTER TABLE `pagepic` ENABLE KEYS */;

#
# Structure for table "service"
#

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `title2` varchar(50) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "service"
#

/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (11,'å…¬å¸ä¸»è¦ä¸šåŠ¡','ä¸ºå„ç±»ä¼ä¸š å¼±åŠ¿ç¾¤ä½“ å‡ºè°‹åˆ’ç­– æŽ’å¿§è§',NULL,'20161105101054_740.png');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;

#
# Structure for table "servicepage"
#

DROP TABLE IF EXISTS `servicepage`;
CREATE TABLE `servicepage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `picname` varchar(50) DEFAULT NULL,
  `uedittext` text,
  `introduct` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

#
# Data for table "servicepage"
#

/*!40000 ALTER TABLE `servicepage` DISABLE KEYS */;
INSERT INTO `servicepage` VALUES (44,'主要业务','20161223161243_452.png','&lt;p&gt;根据您的要求来做网站。网站功能可定制。网站页面效果设计、网站页面制作。&lt;/p&gt;&lt;p&gt;搜索引擎优化。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;http://img.baidu.com/hi/jx2/j_0057.gif&quot;/&gt;&lt;/p&gt;','php网站开发。公司展示型网站开发。');
/*!40000 ALTER TABLE `servicepage` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `base` varchar(3) DEFAULT NULL,
  `service` varchar(3) DEFAULT NULL,
  `news` varchar(3) DEFAULT NULL,
  `message` varchar(3) DEFAULT NULL,
  `super` varchar(3) DEFAULT NULL,
  `picname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (11,'admin','202cb962ac59075b964b07152d234b70','on','on','on','on','on','20161104141202_378.png');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

#
# Structure for table "usermessage"
#

DROP TABLE IF EXISTS `usermessage`;
CREATE TABLE `usermessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` text,
  `mtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

#
# Data for table "usermessage"
#

INSERT INTO `usermessage` VALUES (15,'dsfawefwefwef','asdfsdf','agsdgsdgdgds','345435234234','2345634523@qq.com','dsfasdgsdgdsgsdfsdfdsfdsfsdvsdvsdvsdvsdvsdvsdvsdvsdvsdvsadvdsvsdvsdvsdvvsv','2016-11-01 16:18:53'),(16,'æŠ¯æŽ…æ‘‡ä¸€æ‰”','å¦‚æžœè€Œè®©è¿‡çƒ­è¿‡','äºŒé˜¿å“¥èƒ‰åŽæ›´çƒ­çˆ±åŽ','324523423423','5345345@126.com','ä¼šæ™¤ä¸­ï¼ŒæŽå…‹å¼ºè¡¨ç¤ºï¼Œä»Šå¹´9æœˆçš„äºŒåå›½é›†å›¢é¢†å¯¼äººæ­å·žå³°ä¼šï¼Œå›´ç»•æž„å»ºâ€œåˆ›æ–°ã€æ´»åŠ›ã€è”åŠ¨ã€åŒ…å®¹â€çš„ä¸–ç•Œç»æµŽï¼Œè¾¾æˆå¹¿æ³›å…±è¯†ã€‚ä¸ºæ‘†è„±ä¸–ç•Œç»æµŽå›°å±€å’Œæ·±åŒ–å›½é™…åˆä½œæä¾›äº†æ–°æ€è·¯ã€‚\r\n\r\nâ€œ16+1åˆä½œâ€æ˜¯ä¸­å›½ä¸Žä¸­ä¸œæ¬§å›½å®¶å‹å¥½åˆä½œçš„åˆ›æ–°ä¸¾æŽªã€‚åŽ»å¹´ã€Šè‹å·žçº²è¦ã€‹ç¡®å®šçš„50å¤šé¡¹ä¸¾æŽªå·²åŸºæœ¬è½å®žã€‚æœ¬æ¬¡ä¼šæ™¤ä»¥â€œäº’è”ã€åˆ›æ–°ã€ç›¸èžã€å…±æµŽâ€ä¸ºä¸»é¢˜ï¼Œå…·æœ‰å¾ˆå¼ºçš„é’ˆå¯¹æ€§å’ŒçŽ°å®žæ„ä¹‰ï¼Œå¹¶å°±â€œ16+1åˆä½œâ€æœªæ¥å‘å±•æå‡ºå»ºè®®ï¼š\r\n\r\nä¸€æ˜¯æ·±åŒ–åŸºç¡€è®¾æ–½å’Œäº’è”äº’é€šåˆä½œã€‚ä¸­æ–¹é¼“åŠ±å›½å†…ä¿¡èª‰å¥½ã€å®žåŠ›å¼ºçš„ä¼ä¸šä»¥å·¥ç¨‹æ‰¿åŒ…ã€æ”¿åºœä¸Žç¤¾ä¼šèµ„æœ¬åˆä½œç­‰å¤šç§å½¢å¼ï¼Œå‚ä¸Žä¸­ä¸œæ¬§å›½å®¶é«˜é€Ÿå…¬è·¯ç½‘ã€æ¸¯å£ç½‘ã€ç”µç½‘ã€äº’è”ç½‘ç­‰å»ºè®¾ã€‚','2016-11-02 08:04:08'),(18,'tretret','rtrtr','rtrethtry','44444555544','1079597830@qq.com','fwfwae','2016-11-02 09:10:22'),(19,'fer','ere','eere','22222222222','43gfdsg@126.com','rtyrey','2016-11-04 09:41:53');

#
# Structure for table "welcome"
#

DROP TABLE IF EXISTS `welcome`;
CREATE TABLE `welcome` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `title2` varchar(50) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "welcome"
#

/*!40000 ALTER TABLE `welcome` DISABLE KEYS */;
INSERT INTO `welcome` VALUES (6,'欢迎来到本站','按照您的需求开发软件、开发网站。','为了给公司一个展示的平台。我们可以做一个网站。');
/*!40000 ALTER TABLE `welcome` ENABLE KEYS */;
