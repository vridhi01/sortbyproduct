<?php

namespace Sortby\productlist\Model\Rewrite\Catalog;

class Config extends \Magento\Catalog\Model\Config {
	 /**
     * Retrieve Attributes Used for Sort by as array
     * key = code, value = name
     *
     * @return array
     */
    public function getAttributeUsedForSortByArray()
    {
        $options = ['position' => __('Position')];
        foreach ($this->getAttributesUsedForSortBy() as $attribute) {
            /* @var $attribute \Magento\Eav\Model\Entity\Attribute\AbstractAttribute */
            $options[$attribute->getAttributeCode()] = $attribute->getStoreLabel();
        }
        $options['Best Seller'] = __('Bestseller');
        $options['rating_summary'] = __('Rating');

        return $options;
    }
}