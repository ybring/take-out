<?php
namespace Home\Model;
use Think\Model\RelationModel;
class TypeModel extends RelationModel {
	protected $_link = array(         
		'product'  =>  array(       
	        'mapping_type'  => self::HAS_MANY,
	        'class_name'    => 'product',
	        'foreign_key'   => 'type_id',
	       // 'mapping_name'  => 'dept',
	       	'condition' => 'up_down=1',
	    ),      
	);
}