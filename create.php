<?php

require "config.php";
// create , new, make, priomka
?>


<form action="store.php" method="post">

    <input type="text" name="name" value="" placeholder="Название товара"/> <br>
    <input type="text" name="price" value="" placeholder="Ввидете цену"/> <br>
    <!--<input type="text" name="description" value=""/> <br>-->
    <textarea name="description" id="" cols="30" rows="10" placeholder="Описание товара">
    </textarea><br>
    <input type="submit">
</form>