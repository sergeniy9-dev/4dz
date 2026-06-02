<?php

const SITE = [
    'name' => 'AS ДИЗАЙН',
    'descriptor' => 'Интерьеры • Дизайн',
    'phone' => '+7 000 000-00-00',
    'phone_href' => '+70000000000',
    'email' => 'hello@example.ru',
    'telegram' => 'https://t.me/your_username',
    'whatsapp' => 'https://wa.me/70000000000',
    'address' => 'Москва / работа по РФ',
    'base_url' => '',
    'metrika_id' => '00000000'
];

const NAV = [
    '/' => 'Главная',
    '/about' => 'О нас',
    '/design' => 'Дизайн',
    '/projects' => 'Портфолио',
    '/reviews' => 'Отзывы',
    '/contacts' => 'Контакты',
];

function h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function url(string $path = ''): string
{
    $base = rtrim(SITE['base_url'], '/');
    $path = '/' . ltrim($path, '/');

    if ($path === '/') {
        return $base === '' ? '/' : $base . '/';
    }

    return $base . $path;
}

function asset(string $path): string
{
    return url('assets/' . ltrim($path, '/'));
}












