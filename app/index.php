<?php
// Função para carregar a página com base na URL
function loadPage($page) {
    $path = __DIR__ . '/pages/' . $page . '.php';
    if (file_exists($path)) {
        include $path;
    } else {
        echo "Página não encontrada.";
    }
}

// Obtém a URL amigável, se existir
$url = isset($_GET['page']) ? $_GET['page'] : 'home';

// Carrega a página apropriada
loadPage($url);
