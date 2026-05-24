<?php

require_once __DIR__ . '/includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . url('/contacts'));
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');
$page = trim($_POST['page'] ?? '');
$utmSource = trim($_POST['utm_source'] ?? '');
$utmMedium = trim($_POST['utm_medium'] ?? '');
$utmCampaign = trim($_POST['utm_campaign'] ?? '');

if ($name === '' || $phone === '') {
    header('Location: ' . url('/contacts?error=1'));
    exit;
}

$line = [
    date('Y-m-d H:i:s'),
    $name,
    $phone,
    $message,
    $page,
    $utmSource,
    $utmMedium,
    $utmCampaign,
    $_SERVER['REMOTE_ADDR'] ?? ''
];

$file = __DIR__ . '/leads/leads.csv';
$exists = file_exists($file);

$fp = fopen($file, 'ab');
if ($fp) {
    if (!$exists) {
        fputcsv($fp, ['date', 'name', 'phone', 'message', 'page', 'utm_source', 'utm_medium', 'utm_campaign', 'ip'], ';');
    }
    fputcsv($fp, $line, ';');
    fclose($fp);
}

$subject = 'Заявка с сайта ' . SITE['name'];
$body = "Имя: {$name}\nТелефон: {$phone}\nСообщение: {$message}\nСтраница: {$page}\nUTM source: {$utmSource}\nUTM medium: {$utmMedium}\nUTM campaign: {$utmCampaign}";

if (SITE['email'] !== 'hello@example.ru') {
    @mail(SITE['email'], $subject, $body, "Content-Type: text/plain; charset=UTF-8");
}

header('Location: ' . url('/contacts?sent=1'));
exit;
