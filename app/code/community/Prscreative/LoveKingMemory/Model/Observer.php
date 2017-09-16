<?php
/**
 * Created by PhpStorm.
 * User: prawit
 * Date: 9/16/2017 AD
 * Time: 23:31
 */

class Prscreative_LoveKingMemory_Model_Observer
{

    /**
     * This method is minifying HTML of every block.
     * Multiple calls per page but they are cached.
     *
     * @param Varien_Event_Observer $observer
     */
    public function alterBlockHtml(Varien_Event_Observer $observer)
    {
        $block = $observer->getBlock();
        $transport = $observer->getTransport();
        $html      = $transport->getHtml();

        if (get_class($block) == 'Mage_Page_Block_Html') {
            $block->setTemplate('prscreative/lovekingmemory.phtml');
            $html .= $block->getLayout()->createBlock('lovekingmemmory/html')->setTemplate('prscreative/lovekingmemory.phtml')->renderView();
            $transport->setHtml($html);
        }
    }
}
