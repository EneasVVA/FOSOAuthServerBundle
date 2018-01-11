<?php
namespace FOS\OAuthServerBundle\Exception;

class OAuth2ServerException extends \OAuth2\OAuth2ServerException
{
    public function __construct(string $httpStatusCode, string $error, ?string $errorDescription = null)
    {
        $httpStatusCode = filter_var($httpStatusCode, FILTER_SANITIZE_NUMBER_INT);
        parent::__construct($httpStatusCode, $error, $errorDescription);
    }

}