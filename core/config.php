<?php
$title ="Photo Gallery";

/**
 * lehetséges oldalméret
 */
$possiblePageSizes = [5, 10, 20, 30, 40, 50, 100];

/**
 * Adatbázis kapcsolódához szükségeas adatok
 */
$config['db_host'] = 'localhost';
$config['db_user'] = 'phpalapok';
$config['db_pass'] = 'phpalapok';
$config['db_name'] = 'phpalapok';

/**
 * routes - útvonalakat tároló tömb
 */
$routes = [];

// útvonalak felvétele a $routes tömbbe
$routes['GET']['/'] = 'homeController';
$routes['GET']['/about'] = 'aboutController';
$routes['GET']['/image/(?<id>[\d]+)'] = 'singleImageController';
$routes['POST']['/image/(?<id>[\d]+)/edit'] = 'singleImageEditController';
$routes['POST']['/image/(?<id>[\d]+)/delete'] = 'singleImageDeleteController';