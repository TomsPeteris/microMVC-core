<?php

namespace app\core;

/**
 * Class View
 *
 * @package app\core
 */
class View
{
    public string $title = '';

    public function renderView($view, array $params)
    {
        $viewContent = $this->renderViewOnly($view, $params);
        $layoutName = Application::$app->layout;
        if (Application::$app->controller) {
            $layoutName = Application::$app->controller->layout;
        }
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/$layoutName.php";
        $layoutContent = ob_get_clean();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function renderViewOnly($view, array $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }
}