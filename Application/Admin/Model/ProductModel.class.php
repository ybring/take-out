<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class ProductModel extends RelationModel{    
	protected $_link = array(       
		'type'  =>  array(          
			'mapping_type'  => self::BELONGS_TO,  
			'class_name'    => 'type',   
			'foreign_key'   => 'type_id',  
			//'mapping_name'  => 'dept',     
		),            
	
     );
}