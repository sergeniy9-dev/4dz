<?php
page_start(
    'Проекты',
    'Подача будущих кейсов AS Дизайн: архитектура, интерьеры, жилье и комплексная проработка пространства.',
    $currentRoute
);
?>

<section class="projects-hero">
  <div class="container projects-hero-inner">
    <div class="projects-hero-copy">
      <p class="eyebrow">ПРОЕКТЫ</p>
      <h1>Реализуем идеи в пространстве</h1>
      <p class="lead">
        Архитектура и интерьер, которые подчеркивают стиль жизни и задачи бизнеса.
        Каждый проект — это баланс эстетики, функциональности и бюджета.
      </p>
    </div>
  </div>
</section>

<section class="projects-showcase">
  <div class="container">
    <div class="project-filters">
      <button class="active" type="button">Все проекты</button>
      <button type="button">Частные дома</button>
      <button type="button">Квартиры</button>
      <button type="button">Коммерческие</button>
      <button type="button">В процессе</button>
    </div>

    <div class="projects-card-grid">
      <article class="project-case">
        <div class="project-case-img img-house"></div>
        <div class="project-case-body">
          <h3>Загородный дом</h3>
          <p>Архитектурный образ частного дома с арочной входной группой.</p>
          <div class="project-meta">
            <span>380 м²</span>
            <span>2024</span>
            <span>Реализован</span>
          </div>
        </div>
      </article>

      <article class="project-case">
        <div class="project-case-img img-sofa"></div>
        <div class="project-case-body">
          <h3>Квартира для жизни</h3>
          <p>Планировочная и интерьерная логика квартиры для постоянного проживания.</p>
          <div class="project-meta">
            <span>135 м²</span>
            <span>2024</span>
            <span>Реализован</span>
          </div>
        </div>
      </article>

      <article class="project-case">
        <div class="project-case-img img-chair"></div>
        <div class="project-case-body">
          <h3>Private Interior</h3>
          <p>Светлая интерьерная подача с мягкими формами, камнем и латунными акцентами.</p>
          <div class="project-meta">
            <span>92 м²</span>
            <span>2024</span>
            <span>В процессе</span>
          </div>
        </div>
      </article>

      <article class="project-case project-case-accent">
        <div class="project-case-img img-complex"></div>
        <div class="project-case-body">
          <h3>Premium Fit-Out</h3>
          <p>Доведение концепции до понятной системы отделки и комплектации.</p>
          <div class="project-meta">
            <span>Полный цикл</span>
            <span>2024</span>
            <span>Под ключ</span>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="projects-cta">
  <div class="container projects-cta-board">
    <div>
      <p class="eyebrow">ОБСУДИМ ПРОЕКТ?</p>
      <h2>Подберем формат работы под вашу задачу</h2>
      <p class="muted">
        Расскажите о пространстве, сроках и ожиданиях — предложим оптимальный путь:
        от концепции до комплексной подготовки решений.
      </p>
    </div>
    <a class="btn primary" href="<?= url('/contacts') ?>">Связаться с нами</a>
  </div>
</section>

<?php page_end(); ?>
