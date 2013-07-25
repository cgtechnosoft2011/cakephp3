<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = '_categories';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'c_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'c_parent_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'c_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'c_status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'indexes' => array(
			'PRIMARY' => array('column' => 'c_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'c_id' => 1,
			'c_parent_id' => 1,
			'c_name' => 'Lorem ipsum dolor sit amet',
			'c_status' => 1
		),
	);

}
