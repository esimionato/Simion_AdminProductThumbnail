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
class Simion_AdminProductThumbnail_Block_Catalog_Product_Grid extends Mage_Adminhtml_Block_Catalog_Product_Grid
{
    protected function _prepareColumns() {
        $this->addColumn('thumbnail', array(
            'column_css_class' => 'grid-product-thumbnail-column',
            'filter'           => false,
            'header'           => Mage::helper('catalog')->__('Thumbnail'),
            'header_css_class' => 'grid-product-thumbnail-header',
            'index'            => 'image',
            'renderer'         => 'adminproductthumbnail/widget_grid_column_renderer_thumbnail',
            'sortable'         => false,
        ));

        return parent::_prepareColumns();
    }


}
