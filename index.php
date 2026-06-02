<?php

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/layout.php';

$route = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$route = '/' . trim($route, '/');

if ($route === '//') {
    $route = '/';
}


/* ---------- AS ARCHITECTURE REDIRECT FINAL ---------- */
if ($route === '/architecture') {
    header('Location: ' . url('/design'), true, 301);
    exit;
}
/* ---------- END AS ARCHITECTURE REDIRECT FINAL ---------- */

$routes = [
    '/' => [
        'file' => __DIR__ . '/pages/home.php',
        'title' => SITE['name'],
        'description' => SITE['descriptor'],
    ],

    '/about' => [
        'file' => __DIR__ . '/pages/about.php',
        'title' => 'О нас',
        'description' => 'Легенда AS Design.',
    ],

    '/design' => [
        'file' => __DIR__ . '/pages/design.php',
        'title' => 'Дизайн',
        'description' => 'Этапы создания дизайн-проекта.',
    ],

    '/projects' => [
        'file' => __DIR__ . '/pages/projects.php',
        'title' => 'Портфолио',
        'description' => 'Реализованные проекты AS Design.',
    ],

    '/reviews' => [
        'file' => __DIR__ . '/pages/reviews.php',
        'title' => 'Отзывы',
        'description' => 'Отзывы клиентов AS Design.',
    ],

    '/contacts' => [
        'file' => __DIR__ . '/pages/contacts.php',
        'title' => 'Контакты',
        'description' => 'Контакты AS Design.',
    ],

    '/privacy' => [
        'file' => __DIR__ . '/pages/privacy.php',
        'title' => 'Политика конфиденциальности',
        'description' => 'Политика конфиденциальности AS Design.',
    ],

    // Старые страницы не удаляем, просто оставляем скрытыми из меню
'/interior' => [
        'file' => __DIR__ . '/pages/interior.php',
        'title' => 'Интерьер',
        'description' => 'Интерьерные решения AS Design.',
    ],

    '/fitout' => [
        'file' => __DIR__ . '/pages/fitout.php',
        'title' => 'Под жильё',
        'description' => 'Подготовка под реализацию.',
    ],

    '/process' => [
        'file' => __DIR__ . '/pages/process.php',
        'title' => 'Этапы',
        'description' => 'Этапы работы AS Design.',
    ],
];

if (isset($routes[$route]) && file_exists($routes[$route]['file'])) {
    $page = $routes[$route];

    page_start($page['title'], $page['description'], $route);
    require $page['file'];
    page_end();
    exit;
}

http_response_code(404);

page_start('Страница не найдена', 'Страница не найдена', $route);
?>

<section class="section">
  <div class="container" style="padding: 120px 0;">
    <p class="eyebrow">404</p>
    <h1 style="font-family: var(--font-serif, Georgia, serif); font-size: clamp(56px, 6vw, 104px); line-height: .95; font-weight: 400; margin: 0 0 24px;">
      Страница не найдена
    </h1>
    <p class="muted" style="font-size: 22px; max-width: 680px;">
      Адрес изменился или страница была удалена.
    </p>
    <a class="btn btn-primary" href="<?= url('/') ?>">На главную</a>
  </div>
</section>

<?php
page_end();

