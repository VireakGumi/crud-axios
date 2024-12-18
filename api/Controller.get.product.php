<?php
// RESTs = Create, READ, update, delete, show
// CRUD = Create, READ, update, delete, 
// build api get products

// get file name
$file = './database/product.json';
// read file json "file_get_contents"
$products = json_decode(file_get_contents($file));

// as a api file echo is = return
echo json_encode([
    'data' => $products,
    'result' => TRUE,
    'message' => 'Product get successfully',
    'status' => 200
]);
// status code = 200 success
// status code = 404 not found error message
// status code = 401 authorization 
// status code = 420 Method not found error message
// status code = 500 server error
