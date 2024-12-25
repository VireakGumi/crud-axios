<?php
// get last id product 
function getLastIdProduct($products)
{
    $result = 0;
    $maxID = $products ? $products[0]['id'] : 0;
    foreach ($products as $product) {
        if ($product['id'] > $maxID) {
            $result = $product['id'];
        }
    }
    return $result;
}
// set file name
$fileName = './database/products.json';
// get products from product.json file
$products = json_decode(file_get_contents($fileName), true);

// $_GET and $_POST are global variables use for form input
// isset() is use to check if parameters from form input like id, name, stock return TRUE or FALSE
if (isset($_POST['name']) && $_POST['price']) {
    $id = getLastIdProduct($products) + 1;
    $name = $_POST['name'];
    $price = intval($_POST['price']);
    // push array array_push or $array[] = []
    $products[] = [
        'id' => $id, 
        'name' => $name, 
        'price' => $price 
    ];

    // store product to products.json
    file_put_contents($fileName, json_encode($products));

    echo json_encode([
        'data' => $products,
       'result' => TRUE,
       'message' => 'Product created successfully',
       'status' => 200  // HTTP status code 
    ]);
}else {
    echo json_encode([
       'result' => FALSE,
       'message' => 'Name and price are required',  
       'status' => 404  // HTTP status code
    ]);
}



