<?php
page_start(
    'Интерьеры',
    'Интерьерная проработка жилья и коммерческих пространств: планировки, мебель, свет, материалы и атмосфера.',
    $currentRoute
);
?>

<section class="page-hero page-hero-interior">
  <div class="container page-hero-inner">
    <div>
      <p class="eyebrow">ИНТЕРЬЕРЫ</p>
      <h1>Создаем гармоничные интерьеры для жизни и бизнеса</h1>
      <p class="lead">
        Продумываем планировки, мебельные сценарии, свет, хранение, материалы
        и детали, которые делают пространство цельным.
      </p>
      <div class="actions">
        <a class="btn primary" href="<?= url('/contacts') ?>">Обсудить интерьер</a>
        <a class="btn" href="<?= url('/projects') ?>">Смотреть проекты</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div>
      <p class="eyebrow">Детали</p>
      <h2>Дорого выглядит то, что не спорит само с собой</h2>
      <p class="muted">
        Хороший интерьер держится не на отдельных дорогих предметах, а на планировке,
        пропорциях, свете, фактурах и чистой логике пространства.
      </p>
    </div>

    <div class="cards">
      <article class="card reveal">
        <div class="card-num">01</div>
        <h3>Планировка</h3>
        <p class="muted">Маршруты, зоны, приватность, хранение и бытовые сценарии.</p>
      </article>

      <article class="card reveal">
        <div class="card-num">02</div>
        <h3>Свет</h3>
        <p class="muted">Общий, вечерний, акцентный и функциональный свет.</p>
      </article>

      <article class="card reveal">
        <div class="card-num">03</div>
        <h3>Материалы</h3>
        <p class="muted">Камень, дерево, латунь, текстиль и мягкие фактуры.</p>
      </article>
    </div>
  </div>
</section>

<?php page_end(); ?>
