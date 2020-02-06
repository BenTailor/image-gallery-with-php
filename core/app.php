<?php

// útvonalak felvétele a $routes tömbbe

//route('/', 'homeController');
//route('/about', 'aboutController');
//route('/image/(?<id>[\d]+)', 'singleImageController');
//route('/image/(?<id>[\d]+)/edit', 'singleImageEditController', 'POST');
//route('/image/(?<id>[\d]+)/delete', 'singleImageDeleteController', 'POST');

//az útvonal lekérdezése
$uri = $_SERVER["REQUEST_URI"] ?? '/';

$cleaned = explode("?", $uri)[0];
//dispatch() függvény megívása, ami kiválasztja az adott útvonalhoz tartozó controllert

list($view, $data) = dispatch($cleaned, 'notFoundController' );
extract($data);

if (preg_match("%^redirect:\:(?<route>.*)$%", $view, $matches)) {
    $redirectTarget = $matches['route'];
    header('Location:'.$redirectTarget);
    die();
}

extract($data);

/**
 * Lapméret
 * ?? php 7-ben null coalescing operator
 */
//$size = $_GET["size"] ?? 10;

/**
 * oldalszám, alapértelmezetten 1
 */
//$page = $_GET["page"] ?? 1;

//var_dump($size);
//var_dump($page); 


//eltolás kiszámítása
//$offset = ($page - 1) * $size;


//var_dump($content);







