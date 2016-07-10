<?php
namespace Remarkety\Mgconnector\Api\Data;

/**
 * Interface CouponInterface
 *
 * @api
 */
interface ProductCountInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    /**
     * @return int|null
     */
    public function getCount();

    /**
     * @param int $count
     * @return $this
     */
    public function setCount($count);
}