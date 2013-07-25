<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property questions $qb_questions
 */
class Category extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_categories';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'c_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'c_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'c_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'c_parent_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'c_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'c_status' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	/*public $hasOne = array(
		'questions' => array(
			'className' => 'questions',
			'foreignKey' => 'q_c_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
}
