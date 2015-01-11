<?php

namespace KJ\QuoteApi\Api;

class Quote
{
    protected $_quoteCollection;

    public function __construct(\Magento\Sales\Model\Resource\Quote\Collection $quoteCollection)
    {

        $this->_quoteCollection = $quoteCollection;
    }

    /**
     * Lists shipment comments that match specific search criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteria $criteria The search criteria.
     * @return \Magento\Sales\Api\Data\ShipmentCommentSearchResultInterface Shipment comment search result interface.
     */
    public function getList()
    {
        $quotes = $this->_quoteCollection->setOrder('entity_id', 'DESC')->toArray();

        return $quotes['items'];
    }
}
