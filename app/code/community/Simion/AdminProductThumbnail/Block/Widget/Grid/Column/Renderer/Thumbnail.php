<?php
/**
 * Simionato Ernesto extension for Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade
 * the Simion AdminProductThumbnail module to newer versions in the future.
 * If you wish to customize the Simion AdminProductThumbnail module for your needs
 * please refer to http://www.magentocommerce.com for more information.
 *
 * @category   Simion
 * @package    Simion_AdminProductThumbnail
 * @copyright  Copyright (C) 2012 Simionato Ernesto (https://github.com/esimionato)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Simion Admin Product Thumbnail  
 *
 * Adding a thumnbail image on the product to category tab and the product grid.
 *
 * @category   Simion
 * @package    Simion_AdminProductThumbnail
 * @subpackage Block
 * @author     simionatoeg@gmail.com
 */
class Simion_AdminProductThumbnail_Block_Widget_Grid_Column_Renderer_Thumbnail 
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract {

    public function render(Varien_Object $row) {
        $product = Mage::getSingleton('catalog/product')->load($row->getId());
        if($product->getImage() && $product->getImage() != 'no_selection') {
            return sprintf('<img id="%s" src="%s" class="grid-product-thumbnail-img %s"/>',
                $this->getColumn()->getId(),
                Mage::helper('adminproductthumbnail/image')->getImageUrl($product->getImage()),
                $this->getColumn()->getInlineCass()
            );
        }
        return false;
    }

}
