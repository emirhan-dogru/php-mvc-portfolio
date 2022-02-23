<?php

function config($key, $default = "")
{
    return $_ENV[$key] ?? $default;
}

function base_url($url = "")
{
    return $_ENV['BASE_URL'] . $url;
}

?>