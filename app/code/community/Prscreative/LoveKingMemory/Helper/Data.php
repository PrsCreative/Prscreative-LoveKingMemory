<?php
class Prscreative_LoveKingMemory_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**\
     * @return mixed
     */
    public function getEnableGrayscale(){
        return Mage::getStoreConfig('king/general/grayscale', Mage::app()->getStore());
    }

    /**
     * @return mixed
     */
    public function getGrayscaleCssDefault(){
        return Mage::getStoreConfig('king/general/grayscale_css', Mage::app()->getStore());
    }

    /**
     * @return mixed
     */
    public function getEnableRibbons(){
        return Mage::getStoreConfig('king/general/enable_ribbons', Mage::app()->getStore());
    }

    /**
     * @return mixed
     */
    public function getRibbons(){
        return Mage::getStoreConfig('king/general/ribbon', Mage::app()->getStore());
    }
}
	 