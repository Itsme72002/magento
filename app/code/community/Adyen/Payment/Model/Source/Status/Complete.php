<?php

class Adyen_Payment_Model_Source_Status_Complete extends Mage_Adminhtml_Model_System_Config_Source_Order_Status
{
    protected $_stateStatuses = Mage_Sales_Model_Order::STATE_COMPLETE;
}
