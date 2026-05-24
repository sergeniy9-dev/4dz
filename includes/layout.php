<?php

require_once __DIR__ . '/config.php';

function page_head(string $title, string $description = ''): void
{
    $fullTitle = $title === SITE['name'] ? SITE['name'] : $title . ' — ' . SITE['name'];
    $description = $description ?: SITE['descriptor'];
    $metrikaId = SITE['metrika_id'];
    ?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= h($fullTitle) ?></title>
  <meta name="description" content="<?= h($description) ?>">
  <meta name="theme-color" content="#11100d">
  <meta property="og:title" content="<?= h($fullTitle) ?>">
  <meta property="og:description" content="<?= h($description) ?>">
  <meta property="og:type" content="website">
  <link rel="icon" href="<?= asset('img/favicon.svg') ?>">
  <link rel="stylesheet" href="<?= asset('css/style.css') ?>">
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
<div class="intro-loader" data-intro>
  <div class="intro-noise"></div>

  <div class="intro-camera">
    <div class="intro-marble"></div>

    <div class="intro-arch arch-back"></div>
    <div class="intro-arch arch-mid"></div>
    <div class="intro-arch arch-front"></div>

    <svg class="intro-bones" viewBox="0 0 1000 680" aria-hidden="true">
      <path d="M500 72 L214 570 L786 570 Z"/>
      <path d="M500 72 L500 570"/>
      <path d="M214 570 L500 336 L786 570"/>
      <path d="M300 420 L700 420"/>
      <path d="M360 292 L640 292"/>
      <path d="M214 570 C310 512 396 468 500 336 C604 468 690 512 786 570"/>
      <circle cx="500" cy="72" r="5"/>
      <circle cx="214" cy="570" r="5"/>
      <circle cx="786" cy="570" r="5"/>
      <circle cx="500" cy="336" r="4"/>
    </svg>

    <div class="intro-logo-stage">
      <img class="intro-logo-copy copy-3" src="<?= asset('img/logo.svg') ?>" alt="">
      <img class="intro-logo-copy copy-2" src="<?= asset('img/logo.svg') ?>" alt="">
      <img class="intro-logo-copy copy-1" src="<?= asset('img/logo.svg') ?>" alt="">
      <img class="intro-logo-main" src="<?= asset('img/logo.svg') ?>" alt="<?= h(SITE['name']) ?>">
    </div>

    <div class="intro-caption">
      <span>ФОН • СВЕТЛЫЙ МРАМОР И ЛАТУНЬ</span>
      <strong>Архитектура начинается с первого впечатления</strong>
    </div>

    <div class="intro-enter-line"></div>
  </div>
</div>
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

<script src="<?= asset('js/main.js') ?>"></script>
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

