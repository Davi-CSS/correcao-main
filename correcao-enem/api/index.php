<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve arquivos estáticos diretamente se existirem
if ($uri !== '/' && file_exists(__DIR__ . '/../public' . $uri)) {
    return false;
}

// Aponta para o entry point do Laravel
require_once __DIR__ . '/../public/index.php';