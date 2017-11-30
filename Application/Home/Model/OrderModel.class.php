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
	);
}