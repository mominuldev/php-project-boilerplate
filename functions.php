<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function authorize($condition, $statusCode = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($statusCode);
    }
}
