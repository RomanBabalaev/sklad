<?php
require "config.php";

$id = $_GET['id'];

if (!empty($id))
{
    $products = Product::find($id);//User update[array];
    $products -> name =$_POST['name'];
    $products -> price =$_POST['price'];
    $products-> description = $_POST['description'];
    $products -> save();
}