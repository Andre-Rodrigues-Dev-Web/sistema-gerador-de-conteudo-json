<?php

namespace App\Controllers;

use App\Services\ViewService;

class PageController {

    protected $viewService;

    public function __construct(ViewService $viewService) {
        $this->viewService = $viewService;
    }

    public function handleRequest($view) {
        $this->viewService->renderView($view);
    }
}
