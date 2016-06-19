<?php
namespace PaypalIpn\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PaypalItemsFixture
 *
 */
class PaypalItemsFixture extends TestFixture
{

	/**
	 * Fields
	 *
	 * @var array
	 */
	// @codingStandardsIgnoreStart
	public $fields = [
		'id' => [
			'type' => 'string',
			'length' => 36,
			'null' => false,
			'default' => null,
			'comment' => '',
			'precision' => null,
			'fixed' => null
		],
		'instant_payment_notification_id' => [
			'type' => 'string',
			'length' => 36,
			'null' => false,
			'default' => null,
			'comment' => '',
			'precision' => null,
			'fixed' => null
		],
		'item_name' => [
			'type' => 'string',
			'length' => 127,
			'null' => true,
			'default' => null,
			'comment' => '',
			'precision' => null,
			'fixed' => null
		],
		'item_number' => [
			'type' => 'string',
			'length' => 127,
			'null' => true,
			'default' => null,
			'comment' => '',
			'precision' => null,
			'fixed' => null
		],
		'quantity' => [
			'type' => 'string',
			'length' => 127,
			'null' => true,
			'default' => null,
			'comment' => '',
			'precision' => null,
			'fixed' => null
		],
		'mc_gross' => [
			'type' => 'float',
			'length' => 10,
			'precision' => 2,
			'unsigned' => false,
			'null' => true,
			'default' => null,
			'comment' => ''
		],
		'mc_shipping' => [
			'type' => 'float',
			'length' => 10,
			'precision' => 2,
			'unsigned' => false,
			'null' => true,
			'default' => null,
			'comment' => ''
		],
		'mc_handling' => [
			'type' => 'float',
			'length' => 10,
			'precision' => 2,
			'unsigned' => false,
			'null' => true,
			'default' => null,
			'comment' => ''
		],
		'tax' => [
			'type' => 'float',
			'length' => 10,
			'precision' => 2,
			'unsigned' => false,
			'null' => true,
			'default' => null,
			'comment' => ''
		],
		'created' => [
			'type' => 'datetime',
			'length' => null,
			'null' => false,
			'default' => null,
			'comment' => '',
			'precision' => null
		],
		'modified' => [
			'type' => 'datetime',
			'length' => null,
			'null' => false,
			'default' => null,
			'comment' => '',
			'precision' => null
		],
		'_constraints' => [
			'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
		],
		'_options' => [
			'engine' => 'InnoDB',
			'collation' => 'utf8_unicode_ci'
		],
	];
	// @codingStandardsIgnoreEnd

	/**
	 * Records
	 *
	 * @var array
	 */
	public $records = [
		[
			'id' => '5b43a547-0e1b-46a4-a9d0-b7e9528a3137',
			'instant_payment_notification_id' => 'Lorem ipsum dolor sit amet',
			'item_name' => 'Lorem ipsum dolor sit amet',
			'item_number' => 'Lorem ipsum dolor sit amet',
			'quantity' => 'Lorem ipsum dolor sit amet',
			'mc_gross' => 1,
			'mc_shipping' => 1,
			'mc_handling' => 1,
			'tax' => 1,
			'created' => '2016-06-04 21:12:32',
			'modified' => '2016-06-04 21:12:32'
		],
	];
}
