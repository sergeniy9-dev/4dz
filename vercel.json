<?php

require_once __DIR__ . '/includes/layout.php';

$routes = [
    '' => 'home',
    'architecture' => 'architecture',
    'interior' => 'interior',
    'fitout' => 'fitout',
    'projects' => 'projects',
    'process' => 'process',
    'contacts' => 'contacts',
    'privacy' => 'privacy'
];

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$path = trim($path, '/');

$scriptDir = trim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
if ($scriptDir !== '' && substr($path, 0, strlen($scriptDir)) === $scriptDir) {
    $path = trim(substr($path, strlen($scriptDir)), '/');
}

$page = $routes[$path] ?? null;

if (!$page) {
    http_response_code(404);
    $currentRoute = '/404';
    page_start('Страница не найдена', 'Такой страницы нет.', $currentRoute);
    ?>
    <section class="section">
      <div class="container narrow">
        <p class="eyebrow">404</p>
        <h1>Страница не найдена</h1>
        <p class="lead">Адрес изменился или страница была удалена.</p>
        <a class="btn primary" href="<?= url('/') ?>">На главную</a>
      </div>
    </section>
    <?php
    page_end();
    exit;
}

$currentRoute = $path === '' ? '/' : '/' . $path;
require __DIR__ . '/pages/' . $page . '.php';
