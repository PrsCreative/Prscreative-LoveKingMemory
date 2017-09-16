<?php
class Mage_Adminhtml_Model_System_Config_Source_Diyoptions15055766670
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
		
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('top_left')),
            array('value' => 2, 'label'=>Mage::helper('adminhtml')->__('top_right')),
            array('value' => 3, 'label'=>Mage::helper('adminhtml')->__('bottom_left')),
            array('value' => 4, 'label'=>Mage::helper('adminhtml')->__('bottom_right')),
        );
    }

}
