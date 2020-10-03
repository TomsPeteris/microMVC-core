<?php

namespace app\core;

use app\core\fields\TextField;
use app\core\fields\TextareaField;

/**
 * Class Form
 *
 * @package app\core\form
 */
class Form
{
    public static function begin($action, $method, $options = [])
    {
        $attributes = [];
        foreach ($options as $key => $value) {
            $attributes[] = "$key=\"$value\"";
        }
        echo sprintf('<form action="%s" method="%s" %s>', $action, $method, implode(" ", $attributes));
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function text(Model $model, $attribute)
    {
        return new TextField($model, $attribute);
    }
    
    public function textarea(Model $model, $attribute)
    {
        return new TextareaField($model, $attribute);
    }

}