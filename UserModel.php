<?php

namespace tompk\micromvc;

use tompk\micromvc\db\DBModel;

/**
 * Class UserModel
 *
 * @package app\core
 */
abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;
}