<?php
    $url_path = parse_url($_SERVER['REQUEST_URI'])['path'];
    // echo $url_path;
    $router = [
        '/route.api.php/get.product' => './api/Controller.get.product.php',
        '/route.api.php/show.product' => './api/Controller.show.php',
        '/route.api.php/store.product' => './api/Controller.store.php',
    ];
    if(array_key_exists($url_path, $router )) {
        // include and require use to import another php into this file
        // include_once and require_once use to import just one time
        include $router[$url_path];
    }
?>