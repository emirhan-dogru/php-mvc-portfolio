<?php

function config($key, $default = "")
{
    return $_ENV[$key] ?? $default;
}

?>