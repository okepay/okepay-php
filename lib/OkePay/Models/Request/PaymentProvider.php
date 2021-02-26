<?php

/**
 * The PaymentProvider request model.
 *
 * @author    OkePay Development <dev@okepay.info>
 * @copyright 2018 OkePay
 * @since     v1.0
 */

namespace OkePay\Models\Request;

/**
 * Class PaymentProvider
 * @package OkePay\Models\Request
 */
class PaymentProvider extends \OkePay\Models\Base
{
    /** @var string $name */
    protected $name;

    /** @var array $paymentMethods */
    protected $paymentMethods;

    /** @var array $activePaymentMethods */
    protected $activePaymentMethods;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param array $paymentMethods
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
    }

    /**
     * @return array
     */
    public function getActivePaymentMethods()
    {
        return $this->activePaymentMethods;
    }

    /**
     * @param array $activePaymentMethods
     */
    public function setActivePaymentMethods($activePaymentMethods)
    {
        $this->activePaymentMethods = $activePaymentMethods;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \OkePay\Models\Response\PaymentProvider();
    }
}
