<?php
/**
 * The signatureCheck request model
 * @author    Remo Siegenthaler <remo.siegenthaler@okepay.info>
 * @copyright 2017 OkePay
 * @since     v1.0
 */
namespace OkePay\Models\Request;

/**
 * Class SignatureCheck
 * @package OkePay\Models\Request
 */
class SignatureCheck extends \OkePay\Models\Base
{
    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \OkePay\Models\Response\SignatureCheck();
    }
}
