<?php
page_start(
    'Архитектурная проработка жилья',
    'Дорогая архитектурная проработка частного жилья: планировки, фасады, интерьерная логика и подготовка под реализацию.',
    $currentRoute
);
?>

<section class="hero">
  <div class="container hero-grid">
    <div>
      <p class="eyebrow js-letters">ARCHITECTURE FOR LIVING</p>
      <h1 class="js-letters">Жилье, которое выглядит дорого еще до стройки</h1>
      <p class="lead">
        Прорабатываем архитектуру, планировочную логику, фасадный образ и интерьерную основу так,
        чтобы дом или квартира были не просто красивыми на картинке, а понятными для реализации.
      </p>
      <div class="actions">
        <a class="btn primary" href="<?= url('/contacts') ?>">Обсудить проект</a>
        <a class="btn" href="<?= url('/architecture') ?>">Что входит</a>
      </div>

      <div class="stats reveal">
        <div class="stat">
          <strong>01</strong>
          <span>Архитектурная идея</span>
        </div>
        <div class="stat">
          <strong>02</strong>
          <span>Планировка под жизнь</span>
        </div>
        <div class="stat">
          <strong>03</strong>
          <span>Подготовка к реализации</span>
        </div>
      </div>
    </div>

    <div class="hero-card reveal">
      <div class="hero-badge">private residence</div>
      <div class="hero-card-text">
        <strong>Арка как символ входа в продуманное пространство</strong>
        <p class="muted">
          Минимализм, пропорции, спокойная премиальность и архитектурная дисциплина вместо случайного декора.
        </p>
      </div>
    </div>
  </div>
</section>

<div class="band">
  <div class="marquee">
    <div>
      <span>ARCHITECTURE</span> / PLANNING / INTERIOR LOGIC / FACADE / REALIZATION / PREMIUM LIVING /
      <span>ARCHITECTURE</span> / PLANNING / INTERIOR LOGIC / FACADE / REALIZATION / PREMIUM LIVING /
    </div>
    <div>
      <span>ARCHITECTURE</span> / PLANNING / INTERIOR LOGIC / FACADE / REALIZATION / PREMIUM LIVING /
      <span>ARCHITECTURE</span> / PLANNING / INTERIOR LOGIC / FACADE / REALIZATION / PREMIUM LIVING /
    </div>
  </div>
</div>

<section class="section">
  <div class="container split">
    <div class="reveal">
      <p class="eyebrow">Суть работы</p>
      <h2>Не рисуем красоту отдельно от жизни</h2>
      <p class="lead">
        Сначала собираем сценарии проживания, затем собираем архитектуру вокруг этих сценариев:
        вход, свет, хранение, приватность, видовые точки, мебель, инженерия и будущая отделка.
      </p>
    </div>

    <div class="cards">
      <article class="card reveal">
        <div class="card-num">01</div>
        <h3>Планировочная логика</h3>
        <p class="muted">Зонирование, маршруты, приватные и общие зоны, сценарии семьи и гостей.</p>
      </article>

      <article class="card reveal">
        <div class="card-num">02</div>
        <h3>Архитектурный образ</h3>
        <p class="muted">Фасады, пропорции, материалы, арки, объемы, входная группа и визуальная цельность.</p>
      </article>

      <article class="card reveal">
        <div class="card-num">03</div>
        <h3>Под жилье</h3>
        <p class="muted">Не абстрактный дизайн, а база для дальнейшей стройки, отделки и комплектации.</p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <p class="eyebrow">Направления</p>
    <h2>От архитектурной идеи до понятного решения</h2>

    <div class="cards">
      <a class="card reveal" href="<?= url('/architecture') ?>">
        <div class="card-num">A</div>
        <h3>Архитектурная проработка</h3>
        <p class="muted">Объем, фасады, посадка, входные сценарии и общее ощущение дома.</p>
      </a>

      <a class="card reveal" href="<?= url('/interior') ?>">
        <div class="card-num">I</div>
        <h3>Интерьерная логика</h3>
        <p class="muted">Планировочные решения, мебельные зоны, свет, хранение и атмосфера.</p>
      </a>

      <a class="card reveal" href="<?= url('/fitout') ?>">
        <div class="card-num">R</div>
        <h3>Окончание под жилье</h3>
        <p class="muted">Финальная упаковка решений, чтобы объект можно было вести дальше без хаоса.</p>
      </a>
    </div>
  </div>
</section>

<?php page_end(); ?>
