<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => 'https://glacial-temple-51496-87c24c489cfb.herokuapp.com',
    'httponly' => true
]);

session_start();

function isUserConnected(): bool
{
    return isset($_SESSION['user']);
}