<?php


function load()
{

    $page = $_GET['page'] ?? '';
    $page = filter_var($page, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $page = (!$page) ? "../app/views/login.php" : "../app/views/{$page}.php";

    if (!file_exists($page)) {
        throw new \Exception("Opa, alguma coisa aconteceu!");
    }

    return $page;
}
