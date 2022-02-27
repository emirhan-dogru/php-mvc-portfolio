<?php

use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

function config($key, $default = "")
{
    return $_ENV[$key] ?? $default;
}

function base_url($url = "")
{
    return $_ENV['BASE_URL'] . $url;
}

function admin_url($url = '')
{
    if ($url == '') {
        return $_ENV['ADMIN_URL'];
    }
    else {
        return base_url() . $_ENV['ADMIN_URL'] . $url;
    }
}

function upload( $name ){
    return \Core\Upload::getInstance($name);
}

function guid() {
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }
    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

function imgDir(){
    return "uploads/".date("Y")."/".date("m");
}

function format_date($date, $format = 'd/F/Y H:i')
{
    $date_formatter = new \Jenssegers\Date\Date();
    $date_formatter->setlocale('tr');
    return $date_formatter->parse($date)->format($format);
}

function passwordHash($password)
{
    $factory = new PasswordHasherFactory([
        'common' => ['algorithm' => 'bcrypt'],
        'memory-hard' => ['algorithm' => 'sodium'],
    ]);

    $passwordHasher = $factory->getPasswordHasher('common');

    return $passwordHasher->hash($password);
}


function passwordVerify($hash, $password)
{
    $factory = new PasswordHasherFactory([
        'common' => ['algorithm' => 'bcrypt'],
        'memory-hard' => ['algorithm' => 'sodium'],
    ]);

    $passwordHasher = $factory->getPasswordHasher('common');

    return $passwordHasher->verify($hash, $password);
}

function auth()
{
    return \Core\Auth::getInstance();
}

function now_url() {
    $url = explode('/' , $_SERVER['REQUEST_URI']);
    $url = end($url);
    return $url;
}

?>
