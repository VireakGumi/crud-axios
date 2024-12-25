<?php
    // file_get_contents('file_name', TRUE)
    $fileName = './database/products.json';
    $products = file_get_contents($fileName);
    $products = json_decode($products, true);
    // convert from object json to associative array we use json_decode(json_data, TRUE)
    // return data to js we use echo json_encode
    echo json_encode([
        'data' => $products,
        'result' => TRUE,
        'message' => 'Products fetched successfully',
        'status' => 200  
    ]);
    // status code = 200 success
    // status code = 404 not found error message
    // status code = 401 authorization 
    // status code = 420 Method not found error message
    // status code = 500 server error
?>