<?php

namespace tompk\micromvc\middlewares;

/**
 * Class BaseMiddleware
 *
 * @package app\core\middlewares
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}