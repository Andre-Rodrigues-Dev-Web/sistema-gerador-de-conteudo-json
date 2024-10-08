<?php

namespace App\Controllers;

use App\Services\MetaTagService;

class MetaTagController {

    protected $metaTagService;

    public function __construct() {
        $this->metaTagService = new MetaTagService();
    }

    public function handleFormSubmit() {
        $title = $_POST['title'] ?? '';
        $description = $_POST['description'] ?? '';
        $keywords = $_POST['keywords'] ?? '';
        $author = $_POST['author'] ?? '';

        $metaTags = $this->metaTagService->generateMetaTags($title, $description, $keywords, $author);

        // Retorna as meta tags diretamente como resposta
        echo $metaTags;
    }
}
