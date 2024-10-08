<?php

function loadView($view) {
    $viewPath = __DIR__ . '/../Views/' . $view . '.php';

    if (file_exists($viewPath)) {
        include $viewPath;
    } else {
        http_response_code(404);
        include __DIR__ . '/../Views/404.php';
    }
}

function loadLayout($layout) {
    $layoutPath = __DIR__ . '/../Layouts/' . $layout . '.php';

    if (file_exists($layoutPath)) {
        include $layoutPath;
    } else {
        throw new Exception("Layout {$layout} não encontrado.");
    }
}
