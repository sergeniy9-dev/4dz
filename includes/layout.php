<?php

require_once __DIR__ . '/config.php';

function page_head(string $title, string $description = ''): void
{
    $fullTitle = $title === SITE['name'] ? SITE['name'] : $title . ' — ' . SITE['name'];
    $description = $description ?: SITE['descriptor'];
    $metrikaId = SITE['metrika_id'];
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $showGreeting = $requestPath === '/' || $requestPath === '/index.php';
    ?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= h($fullTitle) ?></title>
  <meta name="description" content="<?= h($description) ?>">
  <meta name="theme-color" content="#f4eee4">
  <meta property="og:title" content="<?= h($fullTitle) ?>">
  <meta property="og:description" content="<?= h($description) ?>">
  <meta property="og:type" content="website">
  <link rel="icon" href="<?= asset('img/favicon.svg') ?>">
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
  <link rel="stylesheet" href="<?= asset('css/site-light.css') ?>?v=as-greeting-1">

  <?php if ($metrikaId !== '00000000') : ?>
  <script>
    (function(m,e,t,r,i,k,a){
      m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) { return; }
      }
      k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym');

    ym(<?= h($metrikaId) ?>, 'init', {
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true,
      webvisor:true
    });
  </script>
  <?php endif; ?>
</head>
<body>
<?php if ($showGreeting) : ?>
<!-- AS GREETING COVER START -->
<div class="as-greeting-cover" id="asGreetingCover" aria-hidden="true">
  <img class="as-greeting-cover__img" src="/assets/img/intro-brand-scene.png?v=3001" alt="">
</div>
<!-- AS GREETING COVER END -->
<?php endif; ?>
<?php if ($showGreeting) : ?>

<?php endif; ?>

<?php if ($metrikaId !== '00000000') : ?>
<noscript><div><img src="https://mc.yandex.ru/watch/<?= h($metrikaId) ?>" style="position:absolute; left:-9999px;" alt=""></div></noscript>
<?php endif; ?>
<?php
}

function page_header(string $currentRoute): void
{
    ?>
<header class="site-header" data-header>
  <div class="container header-inner">
    <a class="brand" href="<?= url('/') ?>" aria-label="<?= h(SITE['name']) ?>">
      <span class="brand-mark">
        <span></span>
      </span>
      <span class="brand-text">
        <strong><?= h(SITE['name']) ?></strong>
        <small><?= h(SITE['descriptor']) ?></small>
      </span>
    </a>

    <button class="menu-btn" type="button" data-menu-btn aria-label="Открыть меню">
      <span></span><span></span>
    </button>

    <nav class="nav" data-nav>
      <?php foreach (NAV as $href => $label) :
          $active = $currentRoute === $href || ($href !== '/' && str_starts_with_fallback($currentRoute, $href));
      ?>
        <a class="<?= $active ? 'active' : '' ?>" href="<?= url($href) ?>"><?= h($label) ?></a>
      <?php endforeach; ?>
    </nav>

    <a class="header-phone" href="tel:<?= h(SITE['phone_href']) ?>"><?= h(SITE['phone']) ?></a>
  </div>
</header>
<?php
}

function str_starts_with_fallback(string $haystack, string $needle): bool
{
    return $needle === '' || substr($haystack, 0, strlen($needle)) === $needle;
}

function page_footer(): void
{
    ?>
<footer class="footer">
  <div class="container footer-grid">
    <div>
      <a class="brand brand-footer" href="<?= url('/') ?>">
        <span class="brand-mark"><span></span></span>
        <span class="brand-text">
          <strong><?= h(SITE['name']) ?></strong>
          <small><?= h(SITE['descriptor']) ?></small>
        </span>
      </a>
      <p class="muted footer-note">
        Сайт архитектурной студии: проработка планировок, образа, интерьера и подготовки жилья к реализации.
      </p>
    </div>

    <div>
      <h4>Навигация</h4>
      <div class="footer-links">
        <?php foreach (NAV as $href => $label) : ?>
          <a href="<?= url($href) ?>"><?= h($label) ?></a>
        <?php endforeach; ?>
      </div>
    </div>

    <div>
      <h4>Связь</h4>
      <div class="footer-links">
        <a href="tel:<?= h(SITE['phone_href']) ?>"><?= h(SITE['phone']) ?></a>
        <a href="mailto:<?= h(SITE['email']) ?>"><?= h(SITE['email']) ?></a>
        <a href="<?= h(SITE['telegram']) ?>" target="_blank" rel="noopener">Telegram</a>
        <a href="<?= h(SITE['whatsapp']) ?>" target="_blank" rel="noopener">WhatsApp</a>
      </div>
    </div>
  </div>

  <div class="container footer-bottom">
    <span>© <?= date('Y') ?> <?= h(SITE['name']) ?></span>
    <a href="<?= url('/privacy') ?>">Политика конфиденциальности</a>
  </div>
</footer>

<script src="<?= asset('js/main.js') ?>?v=as-greeting-1"></script>
</body>
</html>
<?php
}

function page_start(string $title, string $description, string $currentRoute): void
{
    page_head($title, $description);
    page_header($currentRoute);
    echo '<main>';
}

function page_end(): void
{
    echo '</main>';
    page_footer();
}

