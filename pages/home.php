<!-- AS HOME ENTRY IMAGE START -->
<div class="as-home-entry-image" data-home-entry-image>
  <div class="as-home-entry-image__frame">
    <img src="/assets/img/intro-brand-scene.png?v=1" alt="AS Design">
  </div>
</div>

<script>
(function () {
  var entry = document.querySelector('[data-home-entry-image]');
  if (!entry) return;

  document.documentElement.classList.add('as-home-entry-lock');

  window.setTimeout(function () {
    entry.classList.add('is-hide');
    document.documentElement.classList.remove('as-home-entry-lock');

    window.setTimeout(function () {
      if (entry && entry.parentNode) {
        entry.parentNode.removeChild(entry);
      }
    }, 700);
  }, 1500);
})();
</script>
<!-- AS HOME ENTRY IMAGE END -->

<!-- AS HOME REF CARDS START -->
<section class="as-home-ref-cards">
  <div class="container">
    <div class="as-home-ref-cards-grid">
      <a class="as-home-ref-card reveal" href="/design">
        <img src="/assets/img/home-card-interior.png?v=8" alt="">
        <div class="as-home-ref-card__body">
          <h3>Дизайн</h3>
<p>Планировка, стиль, свет, материалы и рабочая документация для будущего интерьера.</p>
<span>Смотреть этапы →</span>
        </div>
      </a>

      <a class="as-home-ref-card reveal" href="/interior">
        <img src="/assets/img/home-card-interior.png?v=8" alt="Интерьер">
        <div class="as-home-ref-card__body">
          <h3>Интерьер</h3>
<p>Создаём пространство под ваш образ жизни: от настроения и фактур до деталей и мебели.</p>
<span>Подробнее →</span>
        </div>
      </a>

      <a class="as-home-ref-card reveal" href="/fitout">
        <img src="/assets/img/home-card-fitout.png?v=8" alt="Под ключ">
        <div class="as-home-ref-card__body">
          <h3>Под ключ</h3>
<p>Помогаем пройти путь от идеи до готового пространства без хаоса и лишних решений.</p>
<span>Обсудить формат →</span>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="home-legend-section" id="legend">
  <div class="container">
    <div class="home-legend-board">
      <div class="home-legend-copy">
        <p class="eyebrow">Легенда студии</p>
        <h2>Интерьер начинается не с чертежей</h2>
        <p class="lead">
          А с ощущения дома — тёплого, стильного и по-настоящему вашего.
        </p>
      </div>

      <div class="home-legend-text">
        <p>AS Design — это пространство, где интерьер начинается не с чертежей, а с ощущения дома.</p>
        <p>Мы создаём дизайн-проекты, в которых красота сочетается с удобством, а каждая деталь продумана под жизнь конкретного человека.</p>
        <p>Для нас важно не просто оформить помещение, а раскрыть его характер, сделать его тёплым, стильным и по-настоящему вашим.</p>
        <p>Мы берём на себя путь от идеи до понятного проекта: помогаем определить стиль, продумать планировку, подобрать материалы и собрать интерьер в единую гармоничную историю.</p>
        <p>Наш подход — это спокойствие, вкус и внимание к деталям. Чтобы ваш будущий дом был не просто красивым, а именно тем местом, куда хочется возвращаться.</p>
      </div>
    </div>
  </div>
</section>
<!-- AS HOME REF CARDS END -->
<section class="section stone-section">
  <div class="container stone-layout">
    <div class="stone-section-head reveal">
      <p class="eyebrow">ФИЛОСОФИЯ СТУДИИ</p>
      <h2>Сначала ощущение, потом детали</h2>
      <p class="muted">
        Пространство должно продавать уровень еще до объяснений: через свет,
        пропорции, фактуры, тишину, материалы и точную архитектурную подачу.
      </p>
    </div>

    <div class="stone-grid">
      <article class="stone-card stone-card--01 reveal">
        <div class="stone-card__content">
          <span>ФОН</span>
          <h3>Светлый камень</h3>
          <p>Мраморная фактура, теплый тон и спокойная премиальность.</p>
        </div>
      </article>

      <article class="stone-card stone-card--02 reveal">
        <div class="stone-card__content">
          <span>АКЦЕНТ</span>
          <h3>Латунная линия</h3>
          <p>Тонкая графика, арки и мягкие световые контуры.</p>
        </div>
      </article>

      <article class="stone-card stone-card--03 reveal">
        <div class="stone-card__content">
          <span>ФОРМА</span>
          <h3>Арочный портал</h3>
          <p>Символ входа в продуманное пространство.</p>
        </div>
      </article>

      <article class="stone-card stone-card--04 reveal">
        <div class="stone-card__content">
          <span>РИТМ</span>
          <h3>Редкая типографика</h3>
          <p>Воздух, крупные паузы и дорогая подача.</p>
        </div>
      </article>
    </div>
  </div>
</section>
<section class="home-final-cta">
  <div class="container">
    <div class="home-final-cta__board">
      <div>
        <p class="eyebrow">Следующий шаг</p>
        <h2>Обсудим ваш будущий интерьер</h2>
        <p class="lead">
          Расскажите, какое пространство вы хотите получить — мы поможем собрать идею,
          стиль, планировку и понятный путь к реализации.
        </p>
      </div>

      <div class="home-final-cta__actions">
        <a class="btn primary" href="/contacts">Оставить заявку</a>
        <a class="btn" href="/projects">Смотреть портфолио</a>
      </div>
    </div>
  </div>
</section>

























