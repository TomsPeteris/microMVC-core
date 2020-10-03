<?php

namespace app\core;

/**
 * Class Router
 * 
 * @package app\core
 */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}