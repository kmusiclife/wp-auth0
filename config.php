<?php

require 'vendor/autoload.php';

(Dotenv\Dotenv::createImmutable(__DIR__))->load();

$auth0 = new \Auth0\SDK\Auth0([
    'domain' => $_ENV['AUTH0_DOMAIN'],
    'clientId' => $_ENV['AUTH0_CLIENT_ID'],
    'clientSecret' => $_ENV['AUTH0_CLIENT_SECRET'],
    'cookieSecret' => $_ENV['AUTH0_COOKIE_SECRET']
]);
define('ROUTE_URL_INDEX', home_url('/'));
define('ROUTE_URL_LOGIN', home_url('/signin'));
define('ROUTE_URL_CALLBACK', home_url('/callback'));
define('ROUTE_URL_LOGOUT', home_url('/signout'));

$session = $auth0->getCredentials();
