<?php

namespace App\Services;

class ViewService {

    public function renderView($view) {
        $viewPath = __DIR__ . '/../views/' . $view . '.php';

        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            http_response_code(404);
            include __DIR__ . '/../views/404.php';
        }
    }
}
