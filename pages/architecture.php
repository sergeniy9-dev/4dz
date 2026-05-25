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

<section class="section architecture-gem-section">
  <div class="container architecture-gem-layout">
    <div class="architecture-gem-copy">
      <p class="eyebrow">ПОДХОД</p>
      <h2>Архитектура должна выглядеть собранной, а не украшенной после</h2>
      <p class="muted">
        Мы работаем с пропорциями, светом, входом, приватностью, фасадным ритмом
        и материалами так, чтобы объект выглядел цельно еще на стадии концепции.
      </p>
    </div>

    <figure class="gem-infographic reveal">
      <!-- ---------- AS ARCH STONE CARDS FINAL ---------- -->
<div class="architecture-stone-grid" aria-label="Архитектурные принципы">
  <article class="architecture-stone-card architecture-stone-card--01">
    <span>01</span>
    <h3>Объем</h3>
    <p>Высоты, масса, силуэт, ритм фасада и читаемость архитектуры.</p>
  </article>

  <article class="architecture-stone-card architecture-stone-card--02">
    <span>02</span>
    <h3>Фасад</h3>
    <p>Материалы, фактуры, арочные элементы, свет и статус объекта.</p>
  </article>

  <article class="architecture-stone-card architecture-stone-card--03">
    <span>03</span>
    <h3>Связь с интерьером</h3>
    <p>Окна, виды, мебельные оси, свет и логика будущей отделки.</p>
  </article>
</div>
<!-- ---------- END AS ARCH STONE CARDS FINAL ---------- -->
    </figure>
  </div>
</section>

<?php page_end(); ?>

