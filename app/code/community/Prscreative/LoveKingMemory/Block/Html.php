<?php
/**
 * Created by PhpStorm.
 * User: prawit
 * Date: 9/17/2017 AD
 * Time: 00:12
 */

class Prscreative_LoveKingMemory_Block_Html extends  Mage_Core_Block_Template
{
    /**
     *
     */
    public function getPageGrayscale(){
        $helper         =   Mage::helper('lovekingmemory');
        $grayscalleCss     =   $helper->getGrayscaleCssDefault();

        if($helper->getEnableGrayscale()){

            if($grayscalleCss != ""){
                return $grayscalleCss;
            }
        }else{
            return 'disable';
        }
    }

    public function getRibbons(){
        $helper = Mage::helper('lovekingmemory');
        if($helper->getEnableRibbons()){
            return Mage::helper('lovekingmemory')->getRibbons();
        }else{
            return 'disable';
        }

    }

}