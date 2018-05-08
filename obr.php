<?php
require "config.php";
$name = htmlentities(strip_tags($_POST['name']),ENT_QUOTES);
$pass = htmlentities(strip_tags($_POST ['password']),ENT_QUOTES);

$admins = Admin::all();
foreach ($admins as $admin)
{
    if($name == $admin->name && $pass == $admin->password ){
        echo "Хорошей смены";
        return 'create.php';
    }else{
        echo "Вы не зарегистрированны в системе, либо у тебя сегодня выходной";
        return ;

    }
}











//var_dump($password);
////echo $admin[0]." = Кол-во пользователей";
//
//if ($password == $admins) {
//    echo "Такого пользователя нет";
//} else {
//    echo "ADMIN есть";
//}

//if($id<0)
//{
//    echo "No";
//}else {
//    echo "done";
//}
//
//$clusers =


//$admin = Admin::find($data);
//
//if ($data != $_POST)
//{
//
//    echo "Houston";
//}
//else
//    {
//        return "Хорошей смены друг";
//    }

//
//if (!empty($data))
//{
//
//}
//
//$user = User::create($data);
//echo  $user->id . "пользователей";

//$data = [
//    'name' => $_POST['name'],
//    'password' => $_POST['password'],
//];
