<?php
/**
 * The invoice response model
 * @author    Ueli Kramer <ueli.kramer@comvation.com>
 * @copyright 2014 OkePay
 * @since     v1.0
 */

namespace OkePay\Models\Response;

/**
 * Class Invoice
 * @package OkePay\Models\Response
 */
class Invoice extends \OkePay\Models\Request\Invoice
{
    /** @var string $hash */
    protected $hash = '';

    /** @var string $link */
    protected $link = '';

    /** @var string $status */
    protected $status = '';

    /** @var int $createdAt */
    protected $createdAt = 0;

    /** @var array $invoices */
    protected $invoices = [];

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt($createdAt)
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

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * @param array $invoices
     */
    public function setInvoices($invoices)
    {
        $this->invoices = $invoices;
    }
}
