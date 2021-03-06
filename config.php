<?php
require __DIR__."/vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule -> addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'sklad_new',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

class User extends Illuminate\Database\Eloquent\Model
{
//    protected $fillable = ['name', 'password', 'info'];//разрешено редактировать только это, остальное запрещено
    protected $guarded = ['id']; //запрещено редактировать только это, все остальное разрешено
    //created_at - дата создания
    //update_at - дата последнего редактирования
    public $timestamps = true;
//public $table = "users";
    /*public function posts()
    {
        return $this->hasMany('Post', 'user_id', 'id');
    }*/
}
class Post extends Illuminate\Database\Eloquent\Model {
//    public function userdata()
//    {
//        return $this->belongsTo('User', 'user_id', 'id');
//    }
}
class Product extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = ['id'];
}

class Admin extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = ['id'];
    public $timestamps = true;
}
