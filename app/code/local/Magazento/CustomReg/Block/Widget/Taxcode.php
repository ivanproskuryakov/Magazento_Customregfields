<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Mage
 * @package    Mage_Customer
 * @copyright  Copyright (c) 2008 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
 
/**
 * Tax code Widget Block
 *  
 * @category   BHuman
 * @package    BHuman_TaxCodeAndPrivacy
 * @author     Davide Lomonaco <davide.lomonaco@bhuman.it>
 */
class BHuman_TaxCodeAndPrivacy_Block_Widget_Taxcode extends Mage_Customer_Block_Widget_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('taxcodeandprivacy/widget/taxcode.phtml');
    }

    public function isEnabled()
    {
        return (bool)$this->_getAttribute('taxcode')->getIsVisible();
    }

    public function isRequired()
    {
    	return (bool)$this->_getAttribute('taxcode')->getIsRequired();
    }

    public function getCustomer()
    {
        return Mage::getSingleton('customer/session')->getCustomer();
    }
}
