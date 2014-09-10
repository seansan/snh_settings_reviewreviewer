<?php
 
    class SNH_ReviewReviewer_Model_Observer
    {
        public function controllerReviewSaveBefore(Varien_Event_Observer $observer)
        {
            $layout = $observer->getEvent()->getLayout();
 
            $id = Mage::app()->getRequest()->getParam('id');
 
			//_dataSaveAllowed

			var_dump($observer);

		}
    }