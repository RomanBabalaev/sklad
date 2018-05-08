<?php
require "config.php";

$data = [
    'name' => htmlentities(strip_tags($_POST['name']),ENT_QUOTES),
    'phone' => htmlentities(strip_tags($_POST['phone']),ENT_QUOTES),
    'email' => htmlentities(strip_tags($_POST['email']),ENT_QUOTES),
];
$user = User::create($data);

?>

</br>
<a href="single.php">К витрине</a>