<?php

namespace NamLee\Controllers;

class ErrorController extends CoreController
{
    /**
     * Display page 404
     *
     * @return void
     */
    public function error404()
    {
        http_response_code('404');

        $this->show('error/error404');
    }
}
