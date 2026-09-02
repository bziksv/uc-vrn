<?php

if (file_exists(__DIR__ . '/smartcaptcha.keys.php')) {
    require_once __DIR__ . '/smartcaptcha.keys.php';
}
if (!defined('SMARTCAPTCHA_CLIENT_KEY')) {
    define('SMARTCAPTCHA_CLIENT_KEY', '');
}
if (!defined('SMARTCAPTCHA_SERVER_KEY')) {
    define('SMARTCAPTCHA_SERVER_KEY', '');
}

function ucvrn_smartcaptcha_enabled()
{
    return SMARTCAPTCHA_CLIENT_KEY !== '' && SMARTCAPTCHA_SERVER_KEY !== '';
}

function ucvrn_verify_smartcaptcha($token)
{
    if (!ucvrn_smartcaptcha_enabled()) {
        return true;
    }

    $token = trim((string)$token);
    if ($token === '') {
        return false;
    }

    $ip = '';
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    $post = http_build_query([
        'secret' => SMARTCAPTCHA_SERVER_KEY,
        'token' => $token,
        'ip' => $ip,
    ]);

    $ch = curl_init('https://smartcaptcha.cloud.yandex.ru/validate');
    if ($ch === false) {
        return true;
    }

    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 5,
        CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
    ]);

    $raw = curl_exec($ch);
    $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlErr = curl_errno($ch);
    curl_close($ch);

    if ($curlErr || $httpCode !== 200 || !is_string($raw) || $raw === '') {
        return true;
    }

    $data = json_decode($raw, true);
    return isset($data['status']) && $data['status'] === 'ok';
}
