<?php

namespace App\Services;

class MetaTagService {

    public function generateMetaTags($title, $description, $keywords, $author) {
        $metaTags = '';

        if ($title) {
            $metaTags .= "<meta name=\"title\" content=\"$title\">\n";
        }

        if ($description) {
            $metaTags .= "<meta name=\"description\" content=\"$description\">\n";
        }

        if ($keywords) {
            $metaTags .= "<meta name=\"keywords\" content=\"$keywords\">\n";
        }

        if ($author) {
            $metaTags .= "<meta name=\"author\" content=\"$author\">\n";
        }

        return $metaTags;
    }
}
