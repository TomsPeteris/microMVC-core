<?php

namespace tompk\micromvc\middlewares;

use tompk\micromvc\Application;
use tompk\micromvc\exceptions\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 * @package app\core\middlewares
 */
class AuthMiddleware extends BaseMiddleware
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}