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

        $product = Mage::getModel('catalog/product')->load($row['entity_id']);
        $imgUrl = Mage::helper('catalog/image')->init($product, 'small_image')->resize(170); 
        $html = '<img ';
        $html .= 'id="'. $this->getColumn()->getId(). '" ';
        $html .= 'src="'. $imgUrl.'"';
        $html .= 'class="grid-product-thumbnail-img '. $this->getColumn()->getInlineCss(). '"/>';

        return $html;
    }

}
