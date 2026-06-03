<?php
declare(strict_types=1);

/*
  Vercel запускает PHP из /api.
  Мы переносим рабочую директорию в корень проекта
  и подключаем обычный index.php сайта.
*/

chdir(dirname(__DIR__));

require dirname(__DIR__) . '/index.php';
