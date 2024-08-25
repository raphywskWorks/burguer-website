<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\shared\Helpers;

function loadPage($page): void
{
    $path = __DIR__ . '/src/pages/' . $page . '.php';
    if (file_exists($path)) {
        include $path;
    } else {
        echo "Página não encontrada.";
    }
}

$url = Helpers::getPageSlug();

loadPage($url);