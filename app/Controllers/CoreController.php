<?php

namespace NamLee\Controllers;

abstract class CoreController
{
    /**
     * Generate a route
     */
    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
    }

    /**
     * Display page
     *
     * @param [type] $viewName
     * @param array $viewVars
     *
     */
    protected function show($viewName, $viewVars = [])
    {
        $viewVars['currentPage'] = $viewName;
        $viewVars['absoluteURL'] = $_SERVER['BASE_URI'];
        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . '/assets/';
        $viewVars['router'] = $this->router;

        extract($viewVars);
        // dump($viewVars);

        require __DIR__ . '/../Views/layout/header.tpl.php';
        require __DIR__ . '/../Views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../Views/layout/footer.tpl.php';
    }
}
