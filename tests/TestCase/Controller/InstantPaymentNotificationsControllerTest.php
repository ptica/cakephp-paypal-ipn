<?php
namespace PaypalIpn\Test\TestCase\Controller;

use Cake\ORM\TableRegistry;
use PaypalIpn\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\Network\Request;
use Cake\TestSuite\IntegrationTestCase;
use PaypalIpn\Controller\InstantPaymentNotificationsController;

use Cake\Network\Response;
use Cake\TestSuite\TestCase;
use PaypalIpn\Controller\Component\PaypalIpnRequestComponent;
use PaypalIpn\Model\Table\InstantPaymentNotificationsTable;
use PHPUnit_Framework_MockObject_Generator;


/**
 * PaypalIpn\Controller\InstantPaymentNotificationsController Test Case
 */
class InstantPaymentNotificationsControllerTest extends IntegrationTestCase
{


	public $fixtures = ['plugin.paypal_ipn.InstantPaymentNotifications', 'plugin.paypal_ipn.PaypalItems'];
	private $test_request =
		[
			'payment_type' => 'instant',
			'payment_date' => 'Mon Jun 06 2016 23:08:00 GMT 0200 (W. Europe Daylight Time)',
			'payment_status' => 'Completed',
			'payer_status' => 'verified',
			'first_name' => 'John',
			'last_name' => 'Smith',
			'payer_email' => 'buyer@paypalsandbox.com',
			'payer_id' => 'TESTBUYERID01',
			'address_name' => 'John Smith',
			'address_country' => 'United States',
			'address_country_code' => 'US',
			'address_zip' => '95131',
			'address_state' => 'CA',
			'address_city' => 'San Jose',
			'address_street' => '123 any street',
			'business' => 'seller@paypalsandbox.com',
			'receiver_email' => 'seller@paypalsandbox.com',
			'receiver_id' => 'seller@paypalsandbox.com',
			'residence_country' => 'US',
			'item_name1' => 'something',
			'item_number1' => 'AK-1234',
			'quantity' => '1',
			'shipping' => '3.04',
			'tax' => '2.02',
			'mc_currency' => 'USD',
			'mc_fee' => '0.44',
			'mc_gross' => '12.34',
			'mc_gross_1' => '12.34',
			'mc_handling' => '2.06',
			'mc_handling1' => '1.67',
			'mc_shipping' => '3.02',
			'mc_shipping1' => '1.02',
			'txn_type' => 'cart',
			'txn_id' => '899327589',
			'notify_version' => '2.4',
			'custom' => 'xyz123',
			'invoice' => 'abc1234',
			'test_ipn' => '1',
			'verify_sign' => 'AFcWxV21C7fd0v3bYYYRCpSSRl31A6653TbtoE49HuuH-TUJcr.o2Pkj',
		];

	public function testProcess()
	{
		$request = new Request(['post' => $this->test_request]);
		$this->_response = new Response();
		$controller = new InstantPaymentNotificationsController($request, $this->_response);

		$registry = new ComponentRegistry($controller);


		$mocko = new PHPUnit_Framework_MockObject_Generator();
		$controller->PaypalIpnRequest = $mocko->getMockForAbstractClass('PaypalIpn\Controller\Component\PaypalIpnRequestComponent', [$registry], 'PaypalIpnRequestComponent_Mock', true, true, true, ['validate']);


		$controller->PaypalIpnRequest->expects($this->once())
			->method('validate')
			->will($this->returnValue(true));

		$enteties = TableRegistry::get('InstantPaymentNotifications');
		$number_before = $enteties->find('all')->count();
		$controller->process();
		$number_after = $enteties->find('all')->count();
		$this->assertTrue($number_before < $number_after);
		$this->assertResponseSuccess();

	}


}
