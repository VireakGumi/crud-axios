<?php 
    $product_id = $_GET['id'];
    $products = json_decode(file_get_contents("./database/product.json"), true);
    $result = [];
    foreach ($products as $product) {
        if($product['id'] == $product_id) {
            $result = $product;
        }
    }
    echo json_encode([
        'data' => $result,
        'result' => TRUE,
        'message' => 'Product get successfully',
        'status' => 200
    ]);
?>