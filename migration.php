<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;

require_once "config.php";


Capsule::schema()->dropIfExists('users');
Capsule::schema()->create('users', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name'); //varchar 255
    $table->string('password'); //varchar 255
    $table->text('info')->nullable();
    $table->integer('age')->default(18);
    $table->timestamps(); //created_at&updated_at тип datetime
});

Capsule::schema()->dropIfExists('products');
// Таблица товаров
Capsule::schema()->create('products', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 100); // название товара
    $table->integer('price' )->unsigned(); // цена
    $table->string('description', 700); // описание товара
    $table->timestamps();//created_at&updated_at тип datetime

});

Capsule::schema()->dropIfExists('admins');
Capsule::schema()->create('admins', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name'); //varchar 255
    $table->string('password'); //varchar 255
    $table->timestamps(); //created_at&updated_at тип datetime
});

echo "таблицы созданны";
