<?php
/**
 * The Page response model
 * @author    Ueli Kramer <ueli.kramer@comvation.com>
 * @copyright 2014 OkePay
 * @since     v1.0
 */
namespace OkePay\Models\Response;

/**
 * Class Page
 * @package OkePay\Models\Response
 */
class Page extends \OkePay\Models\Request\Page
{
    protected $createdAt = 0;

    /**
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedDate($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
}
