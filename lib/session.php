<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => 'herokuapp.com',
    'secure' => true,
    'httponly' => true
]);

session_start();

function isUserConnected(): bool
{
    return isset($_SESSION['user']);
}