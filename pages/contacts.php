<?php
page_start(
    'Контакты',
    'Связаться по архитектурной проработке жилья.',
    $currentRoute
);

$sent = isset($_GET['sent']);
$error = isset($_GET['error']);
?>

<section class="section">
  <div class="container form-wrap">
    <div>
      <p class="eyebrow">Контакты</p>
      <h1>Обсудим объект</h1>
      <p class="lead">
        Напишите, что нужно проработать: дом, квартира, участок, фасад, планировка или подготовка под реализацию.
      </p>

      <ul class="list">
        <li><?= h(SITE['phone']) ?></li>
        <li><?= h(SITE['email']) ?></li>
        <li><?= h(SITE['address']) ?></li>
      </ul>

      <div class="actions">
        <a class="btn" href="<?= h(SITE['telegram']) ?>" target="_blank" rel="noopener">Telegram</a>
        <a class="btn" href="<?= h(SITE['whatsapp']) ?>" target="_blank" rel="noopener">WhatsApp</a>
      </div>
    </div>

    <form class="form" action="<?= url('/contact.php') ?>" method="post">
      <?php if ($sent) : ?>
        <div class="notice">Заявка отправлена. Мы свяжемся с вами.</div>
      <?php endif; ?>

      <?php if ($error) : ?>
        <div class="notice error">Заполните имя и телефон.</div>
      <?php endif; ?>

      <input type="hidden" name="page" value="">
      <input type="hidden" name="utm_source" value="">
      <input type="hidden" name="utm_medium" value="">
      <input type="hidden" name="utm_campaign" value="">

      <div class="field">
        <label for="name">Имя</label>
        <input id="name" name="name" type="text" required placeholder="Как к вам обращаться">
      </div>

      <div class="field">
        <label for="phone">Телефон</label>
        <input id="phone" name="phone" type="tel" required placeholder="+7">
      </div>

      <div class="field">
        <label for="message">Что нужно проработать</label>
        <textarea id="message" name="message" placeholder="Например: дом 240 м², нужна архитектурная концепция и планировка под постоянное проживание"></textarea>
      </div>

      <button class="btn primary" type="submit">Отправить заявку</button>
    </form>
  </div>
</section>

<?php page_end(); ?>
