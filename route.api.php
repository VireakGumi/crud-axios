<?php
    // $_SERVER['REQUEST_URI'] 
    // parse_url()[path] to get only path
    // $url_path = parse_url($_SERVER['REQUEST_URI'])['path'];
    $url_path = parse_url($_SERVER['REQUEST_URI'])['path'];
    // echo $url_path;

    // CRUD 
    $router = [
        '/route.api.php/products' => './controllers/Controller.index.php',
        '/route.api.php/products/store' => './controllers/Controller.store.php',
    ];
    // array_key_exists use to fine key in array router
    if(array_key_exists($url_path, $router)) {
        // include and require use to import another php into this file
        // include_once and require_once use to import just one time
        include $router[$url_path];
    }

?>