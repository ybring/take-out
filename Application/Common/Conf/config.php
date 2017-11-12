<?php
return array(
	//'配置项'=>'配置值'
	//当URL_CASE_INSENSITIVE设置为true的时候表示URL地址不区分大小写，这个也是框架在部署模式下面的默认设置。
	'URL_CASE_INSENSITIVE'  =>  true,  
	'URL_MODEL'=>2,
	
	//数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'takeout', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集


		// 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.163.com',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'15277165464@163.com',//发件人的邮箱名
    'MAIL_PASSWORD' =>'qq664621217',//163邮箱发件人授权密码
    'MAIL_FROM' =>'15277165464@163.com',//发件人邮箱地址
    'MAIL_FROMNAME'=>'ybr',//发件人姓名
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件
);