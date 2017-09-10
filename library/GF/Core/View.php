<?php
/**
 * Created by PhpStorm.
 * User: Igor Klekotnev
 * Date: 09.07.17
 * Time: 23:08
 */

namespace GF\Core;

use GF\Utils\Utils as Utils;

class View
{
    private $layout;
    private $view;
    private $route;
    private $models;

    public function __construct($route)
    {
        $this->layout = ROOT . DIRECTORY_SEPARATOR . LAYOUT_MAIN;
        $this->view = ROOT .
            DIRECTORY_SEPARATOR . APP .
            DIRECTORY_SEPARATOR . MODULES .
            DIRECTORY_SEPARATOR . ucfirst($route['module']) .
            DIRECTORY_SEPARATOR . 'views' .
            DIRECTORY_SEPARATOR . strtolower($route['controller']) .
            DIRECTORY_SEPARATOR . $route['action'] . '.php';
        $this->route = $route;
        $this->models = AbstractModel::getModels();
    }

    public function show($customLayout = null, $layoutOnly = false)
    {
        $tmpDir = ROOT. DIRECTORY_SEPARATOR . CACHE;
        $layout = ($customLayout) ? ROOT . DIRECTORY_SEPARATOR . APP. DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . $customLayout . '.php' : $this->layout;
        $viewContent   = (file_exists($this->view))   ? file_get_contents($this->view)   : '<p>View file not found  </p>';
        $layoutContent = (file_exists($layout)) ? file_get_contents($layout) : '<p>Layout file not found</p>';
        $mixContent = ($layoutOnly) ? str_replace(CONTENT_PLACEHOLDER, '', $layoutContent ) : Utils::normalizeContent($viewContent, $layoutContent);
//        $tmpFile = fopen($tmpDir . DIRECTORY_SEPARATOR .'tmp_view.php', 'w');
//        fwrite($tmpFile, $mixContent);
//        fclose($tmpFile);
        file_put_contents($tmpDir . DIRECTORY_SEPARATOR .'tmp_view.php', $mixContent);
        include($tmpDir . DIRECTORY_SEPARATOR . 'tmp_view.php');
        file_get_contents($tmpDir . DIRECTORY_SEPARATOR . 'tmp_view.php', true);
    }
}