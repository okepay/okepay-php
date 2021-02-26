<?php
/**
 * The AuthToken request model
 * @author    Ueli Kramer <ueli.kramer@comvation.com>
 * @copyright 2014 OkePay
 * @since     v1.0
 */
namespace OkePay\Models\Request;

/**
 * Class AuthToken
 * @package OkePay\Models\Request
 */
class AuthToken extends \OkePay\Models\Base
{
    protected $userId = 0;

    /**
     * The user id of the user you want an auth token for
     * 
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the user id you would like to get an auth token for
     * 
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \OkePay\Models\Response\AuthToken();
    }
}
