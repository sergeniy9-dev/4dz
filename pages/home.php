<?php
page_start(
    'AS Дизайн — интерьеры и архитектура',
    'AS Дизайн: премиальные интерьеры, архитектура, планировочные решения и комплексная проработка жилья.',
    $currentRoute
);
?>

<section class="as-showcase">
  <div class="container as-showcase-inner">
    <div class="as-showcase-copy">
      <p class="eyebrow">ДИЗАЙН, ПРОДУМАННЫЙ ДО МЕЛОЧЕЙ</p>

      <h1>
        Создаем интерьеры и архитектуру,<br>
        <span>в которых хочется жить</span>
      </h1>

      <p class="lead">
        Комплексный подход к проектированию частных и коммерческих пространств.
        От концепции до подготовки решений под реализацию.
      </p>

      <div class="actions">
        <a class="btn primary" href="<?= url('/contacts') ?>">Рассчитать проект</a>
        <a class="btn" href="<?= url('/projects') ?>">Смотреть проекты</a>
      </div>
    </div>
  </div>
</section>

<section class="as-tile-strip">
  <div class="container as-tiles">
    <a class="as-tile tile-architecture" href="<?= url('/architecture') ?>">
      <div class="as-tile-text">
        <h3>Архитектура</h3>
        <p>Проектируем дома и общественные пространства с учетом контекста, функции и эстетики.</p>
      </div>
      <span>→</span>
    </a>

    <a class="as-tile tile-interior" href="<?= url('/interior') ?>">
      <div class="as-tile-text">
        <h3>Интерьеры</h3>
        <p>Создаем гармоничные интерьеры для жизни и бизнеса — от идеи до финальных деталей.</p>
      </div>
      <span>→</span>
    </a>

    <a class="as-tile tile-fitout" href="<?= url('/fitout') ?>">
      <div class="as-tile-text">
        <h3>Под жилье</h3>
        <p>Решения под ваш образ жизни: комфорт, функциональность и индивидуальность.</p>
      </div>
      <span>→</span>
    </a>

    <a class="as-tile tile-complex" href="<?= url('/process') ?>">
      <div class="as-tile-text">
        <h3>Комплексно</h3>
        <p>Весь процесс под контролем: планирование, авторский надзор и подготовка решений.</p>
      </div>
      <span>→</span>
    </a>
  </div>
</section>

<section class="as-benefits">
  <div class="container as-benefits-row">
    <article>
      <div class="as-benefit-icon">♕</div>
      <div>
        <h3>Премиальный подход</h3>
        <p>Каждое решение основано на логике, опыте и внимании к деталям.</p>
      </div>
    </article>

    <article>
      <div class="as-benefit-icon">△</div>
      <div>
        <h3>Эстетика в деталях</h3>
        <p>Материалы, свет, текстуры и формы создают цельное пространство.</p>
      </div>
    </article>

    <article>
      <div class="as-benefit-icon">▣</div>
      <div>
        <h3>Реализация под ключ</h3>
        <p>От концепции до финальной реализации — без лишних хлопот.</p>
      </div>
    </article>

    <article>
      <div class="as-benefit-icon">◎</div>
      <div>
        <h3>Индивидуальность</h3>
        <p>Каждый проект уникален и отражает характер владельца.</p>
      </div>
    </article>
  </div>
</section>

<section class="signature-section">
  <div class="container signature-board reveal">
    <div class="signature-grid">
      <div>
        <p class="eyebrow">Философия студии</p>
        <h2>Сначала ощущение, потом детали</h2>
        <p class="lead">
          Пространство должно продавать уровень еще до объяснений:
          через свет, пропорции, фактуры, тишину, материалы и точную архитектурную подачу.
        </p>
      </div>

      <div class="signature-points">
        <article class="signature-point">
          <small>Фон</small>
          <strong>Светлый камень</strong>
          <p class="muted">Мраморная фактура, теплый тон и спокойная премиальность.</p>
        </article>

        <article class="signature-point">
          <small>Акцент</small>
          <strong>Латунная линия</strong>
          <p class="muted">Тонкая графика, арки и мягкие световые контуры.</p>
        </article>

        <article class="signature-point">
          <small>Форма</small>
          <strong>Арочный портал</strong>
          <p class="muted">Символ входа в продуманное пространство.</p>
        </article>

        <article class="signature-point">
          <small>Ритм</small>
          <strong>Редкая типографика</strong>
          <p class="muted">Воздух, крупные паузы и дорогая подача.</p>
        </article>
      </div>
    </div>
  </div>
</section>

<?php page_end(); ?>
