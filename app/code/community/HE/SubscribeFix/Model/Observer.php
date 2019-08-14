<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gregc
 * Date: 8/23/13
 * Time: 3:05 PM
 */


class HE_SubscribeFix_Model_Observer
{

/**
 * @param Varien_Event_Observer $observer
 *
 * observer function to update the subscription action date
 *
 */

    public function setUpdateDate(Varien_Event_Observer $observer) {
        $subscriber = $observer->getSubscriber();
        $subscriber['change_status_at'] = (date("Y-m-d H:i:s", time()));
    }
}
