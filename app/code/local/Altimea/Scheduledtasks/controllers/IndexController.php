<?php
class Altimea_Scheduledtasks_IndexController extends Mage_Core_Controller_Front_Action {

	public function indexAction()
	{
		$customer = Mage::getModel('customer/customer');
		$customer->setWebsiteId(1);
		$dat = $customer->loadByEmail('martha_delgadillo11@hotmail.com');

		// user with email exit
		if ($customer->getId()) {
			$customer->setIsDeleteable(true);
			$customer->delete();
			echo "true";
		} else {
			echo "false";
		}
	}
}
