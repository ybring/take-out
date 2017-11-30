# Host: localhost  (Version: 5.5.53)
# Date: 2017-11-30 15:45:31
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "admin"
#

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `lasttime` datetime DEFAULT NULL COMMENT '上次登录时间',
  `newtime` datetime DEFAULT NULL COMMENT '现在登录时间',
  `ip` varchar(50) DEFAULT '0.0.0.0',
  `login_count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "admin"
#

REPLACE INTO `admin` VALUES (1,'admin','$2y$10$cpSBgOi4Ns9caOi8TKlTBuS3ko6jh0aLF.C7TU7K6E5Aljn9bVyme','2017-11-19 13:42:32','2017-11-30 15:44:16','0.0.0.0',30);

#
# Structure for table "deliveryaddress"
#

CREATE TABLE `deliveryaddress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) DEFAULT NULL COMMENT '收单人',
  `customer_phone` varchar(11) DEFAULT NULL COMMENT '手机号码',
  `delivery_address` varchar(255) DEFAULT NULL COMMENT '送餐地址',
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COMMENT='送餐地址信息';

#
# Data for table "deliveryaddress"
#

REPLACE INTO `deliveryaddress` VALUES (67,'zheng','15277165464','南宁市民族大学',4),(68,'sun','15277165464','广西南宁市西乡塘区广西机电职业技术学院',4);

#
# Structure for table "feedback"
#

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact` varchar(255) DEFAULT NULL COMMENT '联系方式',
  `opinion` varchar(255) DEFAULT NULL COMMENT '反馈意见',
  `time` datetime DEFAULT NULL COMMENT '提交时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='意见反馈';

#
# Data for table "feedback"
#

REPLACE INTO `feedback` VALUES (1,'9','=',NULL),(2,'蛐蛐','订单',NULL),(3,'1','2','2017-11-16 11:36:57'),(4,'1','2','2017-11-16 11:37:07'),(5,'15277165464','111','2017-11-30 14:35:04');

#
# Structure for table "order"
#

CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` decimal(10,2) DEFAULT NULL COMMENT '合计-总价格',
  `address_id` int(11) DEFAULT NULL COMMENT '地址Id',
  `users_id` int(11) DEFAULT NULL COMMENT '用户Id',
  `time_of_delivery` varchar(10) DEFAULT NULL COMMENT '送餐时间',
  `order_date` datetime DEFAULT NULL COMMENT '下单日期',
  `remarks` varchar(255) DEFAULT NULL COMMENT '备注信息',
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='订单';

#
# Data for table "order"
#


#
# Structure for table "order_detail"
#

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL COMMENT '商品ID',
  `name` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `nums` int(11) DEFAULT NULL COMMENT '商品份数',
  `price` decimal(10,2) DEFAULT NULL COMMENT '商品单价',
  `subtotal` decimal(10,2) DEFAULT NULL COMMENT '单个商品小计',
  `users_id` int(11) DEFAULT NULL COMMENT '用户ID',
  `order_id` int(11) DEFAULT NULL COMMENT '订单id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='订单详情表';

#
# Data for table "order_detail"
#


#
# Structure for table "product"
#

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '产品名称',
  `picture` varchar(255) DEFAULT NULL COMMENT '图片路径',
  `thumb` varchar(255) DEFAULT NULL COMMENT '压缩图路径',
  `price` varchar(255) DEFAULT NULL COMMENT '单价',
  `type_id` int(11) DEFAULT NULL COMMENT '类别',
  `up_down` int(11) DEFAULT '1' COMMENT '是否上架',
  `sold` int(11) DEFAULT '0' COMMENT '已销售',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=200 DEFAULT CHARSET=utf8;

#
# Data for table "product"
#

REPLACE INTO `product` VALUES (151,'三文鱼','product/5a02c8757b165.jpg','product/thumb_5a02c8757b165.jpg','998',13,1,555),(152,'麻辣披萨','product/5a02c88f9eda5.jpg','product/thumb_5a02c88f9eda5.jpg','559',13,1,6),(153,'辣条抄豆角','product/5a02c8b42b656.jpg','product/thumb_5a02c8b42b656.jpg','556',13,1,8),(154,'发财鸡','product/5a02c8d644c65.jpg','product/thumb_5a02c8d644c65.jpg','888',13,1,44),(155,'麻辣香虾','product/5a02c90f86c28.jpg','product/thumb_5a02c90f86c28.jpg','3333',13,1,0),(156,'豆丁豆丁','product/5a02c92f1723d.jpg','product/thumb_5a02c92f1723d.jpg','11111',59,1,45),(157,'三文鱼','product/5a02c8757b165.jpg','product/thumb_5a02c8757b165.jpg','998',13,1,0),(158,'麻辣披萨','product/5a02c88f9eda5.jpg','product/thumb_5a02c88f9eda5.jpg','559',13,1,4536),(159,'辣条抄豆角','product/5a02c8b42b656.jpg','product/thumb_5a02c8b42b656.jpg','556',13,1,213),(160,'发财鸡','product/5a02c8d644c65.jpg','product/thumb_5a02c8d644c65.jpg','888',13,1,0),(161,'麻辣香虾','product/5a02c90f86c28.jpg','product/thumb_5a02c90f86c28.jpg','3333',13,1,0),(162,'豆丁豆丁','product/5a02c92f1723d.jpg','product/thumb_5a02c92f1723d.jpg','11111',59,1,0),(163,'三文鱼','product/5a02c8757b165.jpg','product/thumb_5a02c8757b165.jpg','998',13,1,123453),(164,'麻辣披萨','product/5a02c88f9eda5.jpg','product/thumb_5a02c88f9eda5.jpg','559',13,1,678),(165,'辣条抄豆角','product/5a02c8b42b656.jpg','product/thumb_5a02c8b42b656.jpg','556',13,1,0),(166,'发财鸡','product/5a02c8d644c65.jpg','product/thumb_5a02c8d644c65.jpg','888',13,1,4),(167,'麻辣香虾','product/5a02c90f86c28.jpg','product/thumb_5a02c90f86c28.jpg','3333',13,1,64),(168,'豆丁豆丁','product/5a02c92f1723d.jpg','product/thumb_5a02c92f1723d.jpg','11111',59,1,6),(169,'三文鱼','product/5a02c8757b165.jpg','product/thumb_5a02c8757b165.jpg','998',13,1,0),(170,'麻辣披萨','product/5a02c88f9eda5.jpg','product/thumb_5a02c88f9eda5.jpg','559',13,1,78),(171,'辣条抄豆角','product/5a02c8b42b656.jpg','product/thumb_5a02c8b42b656.jpg','556',13,1,0),(172,'发财鸡','product/5a02c8d644c65.jpg','product/thumb_5a02c8d644c65.jpg','888',13,1,6),(173,'麻辣香虾','product/5a02c90f86c28.jpg','product/thumb_5a02c90f86c28.jpg','3333',13,1,78),(174,'豆丁豆丁','product/5a02c92f1723d.jpg','product/thumb_5a02c92f1723d.jpg','11111',59,1,678),(175,'麻辣香虾','product/5a02c90f86c28.jpg','product/thumb_5a02c90f86c28.jpg','3333',13,1,6),(176,'三文鱼','product/5a02c8757b165.jpg','product/thumb_5a02c8757b165.jpg','998',13,1,5678),(177,'麻辣披萨','product/5a02c88f9eda5.jpg','product/thumb_5a02c88f9eda5.jpg','559',13,1,0),(178,'辣条抄豆角','product/5a02c8b42b656.jpg','product/thumb_5a02c8b42b656.jpg','556',13,1,6786),(179,'发财鸡','product/5a02c8d644c65.jpg','product/thumb_5a02c8d644c65.jpg','888',13,1,0),(180,'麻辣香虾','product/5a02c90f86c28.jpg','product/thumb_5a02c90f86c28.jpg','3333',13,1,687),(181,'豆丁豆丁','product/5a02c92f1723d.jpg','product/thumb_5a02c92f1723d.jpg','11111',59,1,0),(182,'三文鱼','product/5a02c8757b165.jpg','product/thumb_5a02c8757b165.jpg','998',13,1,78),(183,'麻辣披萨','product/5a02c88f9eda5.jpg','product/thumb_5a02c88f9eda5.jpg','559',13,1,0),(184,'辣条抄豆角','product/5a02c8b42b656.jpg','product/thumb_5a02c8b42b656.jpg','556',13,1,6),(185,'发财鸡','product/5a02c8d644c65.jpg','product/thumb_5a02c8d644c65.jpg','888',13,1,0),(186,'麻辣香虾','product/5a02c90f86c28.jpg','product/thumb_5a02c90f86c28.jpg','3333',13,1,7867),(187,'豆丁豆丁','product/5a02c92f1723d.jpg','product/thumb_5a02c92f1723d.jpg','11111',59,1,0),(188,'三文鱼','product/5a02c8757b165.jpg','product/thumb_5a02c8757b165.jpg','998',13,1,0),(189,'麻辣披萨','product/5a02c88f9eda5.jpg','product/thumb_5a02c88f9eda5.jpg','559',13,1,0),(190,'辣条抄豆角','product/5a02c8b42b656.jpg','product/thumb_5a02c8b42b656.jpg','556',13,1,0),(191,'发财鸡','product/5a02c8d644c65.jpg','product/thumb_5a02c8d644c65.jpg','888',13,1,86),(192,'豆丁豆丁','product/5a02c92f1723d.jpg','product/thumb_5a02c92f1723d.jpg','11111',59,1,0),(193,'三文鱼','product/5a02c8757b165.jpg','product/thumb_5a02c8757b165.jpg','998',13,1,0),(194,'麻辣披萨','product/5a02c88f9eda5.jpg','product/thumb_5a02c88f9eda5.jpg','559',13,1,0),(195,'辣条抄豆角','product/5a02c8b42b656.jpg','product/thumb_5a02c8b42b656.jpg','556',13,1,0),(196,'发财鸡','product/5a02c8d644c65.jpg','product/thumb_5a02c8d644c65.jpg','888',13,1,0),(197,'麻辣香虾','product/5a02c90f86c28.jpg','product/thumb_5a02c90f86c28.jpg','3333',13,1,0),(198,'豆丁豆丁','product/5a02c92f1723d.jpg','product/thumb_5a02c92f1723d.jpg','11111',59,1,0);

#
# Structure for table "type"
#

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`type_id`),
  UNIQUE KEY `type_name` (`type_name`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

#
# Data for table "type"
#

REPLACE INTO `type` VALUES (13,'店长推荐',NULL),(59,'新品上市',NULL),(60,'美味甜品',NULL),(61,'可口饮品',NULL),(74,'优惠套餐',NULL);

#
# Structure for table "users"
#

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(11) DEFAULT NULL COMMENT '手机号码',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `lasttime` datetime DEFAULT NULL COMMENT '上次登录时间',
  `ip` varchar(255) DEFAULT NULL COMMENT '上次登录ip',
  `username` varchar(50) DEFAULT NULL COMMENT '用户名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户管理';

#
# Data for table "users"
#

REPLACE INTO `users` VALUES (2,'13507892836','$2y$10$jJnHzW44M8lpFftBLf40qe1ZQjoFfpjNumg.lX2GX6mtYWzUaWGaa','2017-11-17 18:06:43','0.0.0.0',NULL),(4,'15277165464','$2y$10$h7EaVRWbvD/ckVUi/xr1aOQqZ0RtsvLPlZpacCZQM5mKAYtu/mN2a','2017-11-30 11:38:35','0.0.0.0',NULL);
