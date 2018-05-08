<?php
require 'config.php';

$id = $_GET['id'];

if (!empty($id))
{
    $product = Product::find($id);
    echo json_encode($product->name);
}
?>
</br>
<a href="single.php">К витрине</a>


