<?php
/**
 * UempleadorFixture
 *
 */
class UempleadorFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'uempleador';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'iduempleador' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nombreUsuario' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'usuario_idusuario' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'iduempleador', 'unique' => 1),
			'usuario_idusuario' => array('column' => 'usuario_idusuario', 'unique' => 0)
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
			'iduempleador' => 1,
			'password' => 'Lorem ipsum dolor sit amet',
			'nombreUsuario' => 'Lorem ipsum dolor sit amet',
			'usuario_idusuario' => 1
		),
	);

}