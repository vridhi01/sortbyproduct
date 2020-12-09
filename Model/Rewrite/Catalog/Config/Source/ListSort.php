<?php

namespace Sortby\productlist\Model\Rewrite\Catalog\Config\Source;

class ListSort extends \Magento\Catalog\Model\Config\Source\ListSort {
	public function toOptionArray()
    {
        $options = [];
        $options[] = ['label' => __('Position'), 'value' => 'position'];

        foreach ($this->_getCatalogConfig()->getAttributesUsedForSortBy() as $attribute) {
            $options[] = ['label' => __($attribute['frontend_label']), 'value' => $attribute['attribute_code']];
        }
        $options[] = ['label' => __('Bestseller'), 'value' => 'bestseller'];
        $options[] = ['label' => __('Rating'), 'value' => 'rating_summary'];
        
        return $options;
    }
}