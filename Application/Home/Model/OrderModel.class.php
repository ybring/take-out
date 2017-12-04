<?php
namespace Home\Model;
use Think\Model\RelationModel;
class OrderModel extends RelationModel {
	protected $_link = array(         
		'order_detail'  =>  array(
	        'mapping_type'  => self::HAS_MANY,
	        'class_name'    => 'order_detail',
	        'foreign_key'   => 'order_id',
	    ),
		'address'  =>  array(
			'mapping_type'  => self::BELONGS_TO,
			'class_name'    => 'deliveryaddress',
			'foreign_key'   => 'address_id',//这个是在 order的
		),
	);
}