<?php

use App\Controllers\MetaTagController;

$view = $_GET['view'] ?? 'home';

// Se o formulário de meta tags for enviado, processar via AJAX
if ($view === 'generateMeta' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $metaTagController = new MetaTagController();
    $metaTagController->handleFormSubmit();
} else {
    loadView($view);  // Carregar a view padrão
}
