<?php
require "init.php";//подключаем БД

//добавляем товар в БД
$data = [
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'description' => $_POST['description'],
];

$product=Product::create($data);
echo  $product->id . "Товаров";


