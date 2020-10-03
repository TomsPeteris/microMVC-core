<?php

namespace app\core;

use app\core\db\DBModel;

/**
 * Class UserModel
 *
 * @package app\core
 */
abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}