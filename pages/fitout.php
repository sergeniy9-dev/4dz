<?php
page_start(
    'Под жилье',
    'Проработка жилья под реализацию: планировка, свет, материалы, сценарии, мебель и подготовка решений.',
    $currentRoute
);
?>

<section class="page-hero page-hero-fitout">
  <div class="container page-hero-inner">
    <div>
      <p class="eyebrow">ПОД ЖИЛЬЕ</p>
      <h1>Решения под ваш образ жизни</h1>
      <p class="lead">
        Прорабатываем пространство так, чтобы оно было не только красивым,
        но и удобным: комфорт, функциональность, индивидуальность и спокойная реализация.
      </p>
      <div class="actions">
        <a class="btn primary" href="<?= url('/contacts') ?>">Оставить заявку</a>
        <a class="btn" href="<?= url('/process') ?>">Как работаем</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div>
      <p class="eyebrow">Смысл</p>
      <h2>Финальная проработка, чтобы дальше не было хаоса</h2>
      <p class="muted">
        Собираем решения по планировке, материалам, свету, мебели и деталям в понятную систему,
        с которой можно двигаться к отделке и реализации.
      </p>
    </div>

    <div class="cards">
      <article class="card reveal">
        <div class="card-num">01</div>
        <h3>Комфорт</h3>
        <p class="muted">Сценарии жизни, удобство маршрутов и логика ежедневного использования.</p>
      </article>

      <article class="card reveal">
        <div class="card-num">02</div>
        <h3>Функциональность</h3>
        <p class="muted">Хранение, мебель, проходы, техника и реальные бытовые задачи.</p>
      </article>

      <article class="card reveal">
        <div class="card-num">03</div>
        <h3>Индивидуальность</h3>
        <p class="muted">Пространство отражает характер владельца, а не копирует шаблон.</p>
      </article>
    </div>
  </div>
</section>

<?php page_end(); ?>
