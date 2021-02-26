<?php
/**
 * This class is a template for all communication handler classes.
 * @author    Ueli Kramer <ueli.kramer@comvation.com>
 * @copyright 2014 OkePay
 * @since     v1.0
 */
namespace OkePay\CommunicationAdapter;

/**
 * Class AbstractCommunication
 * @package OkePay\CommunicationAdapter
 */
abstract class AbstractCommunication
{
    /**
     * Perform an API request
     *
     * @param string $apiUrl
     * @param array  $params
     * @param string $method
     *
     * @return mixed
     */
    abstract public function requestApi($apiUrl, $params = array(), $method = 'POST');
}
