<?php
page_start(
    'Архитектура',
    'Архитектурная проработка домов и общественных пространств: объем, фасады, планировки, материалы и визуальная концепция.',
    $currentRoute
);
?>

<section class="page-hero page-hero-architecture">
  <div class="container page-hero-inner">
    <div>
      <p class="eyebrow">АРХИТЕКТУРА</p>
      <h1>Проектируем дома и пространства с характером</h1>
      <p class="lead">
        Создаем архитектурную основу: объем, фасады, входные сценарии, пропорции,
        материалы и связь объекта с будущим интерьером.
      </p>
      <div class="actions">
        <a class="btn primary" href="<?= url('/contacts') ?>">Обсудить проект</a>
        <a class="btn" href="<?= url('/process') ?>">Этапы работы</a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container split">
    <div>
      <p class="eyebrow">Подход</p>
      <h2>Архитектура должна выглядеть собранной, а не украшенной после</h2>
      <p class="muted">
        Мы работаем с пропорциями, светом, входом, приватностью, фасадным ритмом
        и материалами так, чтобы объект выглядел цельно еще на стадии концепции.
      </p>
    </div>

    <div class="cards">
      <article class="card reveal">
        <div class="card-num">01</div>
        <h3>Объем</h3>
        <p class="muted">Высоты, масса, силуэт, ритм фасада и читаемость архитектуры.</p>
      </article>

      <article class="card reveal">
        <div class="card-num">02</div>
        <h3>Фасад</h3>
        <p class="muted">Материалы, фактуры, арочные элементы, свет и статус объекта.</p>
      </article>

      <article class="card reveal">
        <div class="card-num">03</div>
        <h3>Связь с интерьером</h3>
        <p class="muted">Окна, виды, мебельные оси, свет и логика будущей отделки.</p>
      </article>
    </div>
  </div>
</section>

<?php page_end(); ?>
