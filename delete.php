<?php
require "config.php";
$id =$_GET['id'];

if (!empty($id)){
    $product = Product::find($id);//User update[array];
    $product -> delete();
    //print_r($user);
}

$Folder = __DIR__ . DIRECTORY_SEPARATOR . '_sale_';
if (!file_exists($Folder)) {
    try {
        mkdir($Folder, 0777);
    } catch (ErrorException $e) {
        header("Location: error.php?errcode=4007");
        return;
    }
}

$FileName = $Folder . DIRECTORY_SEPARATOR . date('Y-m-d__H-i-s') . '.txt';

$userBay = $_REQUEST['id'];
$text = "продано". $product->name.'<br>';
$text.= "покупатель".$userBay;
file_put_contents($FileName, $text);
?>
<a href="single.php">К ветрине</a></br>

