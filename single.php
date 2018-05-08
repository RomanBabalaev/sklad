<?php
require 'config.php';

$products = Product::all();


?>

<table>
    <tr>

        <th>Витрина</th>

    </tr>
    <?php foreach ($products as $product): ?>
        <tr>

            <td><a href="show.php?id=<?=$product->id ?>"><?=$product->name?></a></td>
            <td>
                <!--<a href="edit.php?id=<?/*= $user->id*/?>">Правка</a>-->
                <a href="delete.php?id=<?=$product->id?>">Купить</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>