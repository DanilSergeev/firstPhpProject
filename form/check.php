<?php
    require "../includ/db.php";
    $nik = filter_var(trim($_POST['nik']),FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

    if(strlen($nik) < 3 || strlen($nik) >50){
        echo 'Недопустимая длина ника'."</br>";
        echo "<a href='/login.php'>Назад</a>";
        die();
    }else if(strlen($login) < 5 || strlen($login) >90 ||strpos($login,"@")==false || strpos($login,".")==false){
        echo 'Недопустимая длина логина или отсутствукт @';
        echo "</br>"."<a href='/login.php'>Назад</a>";
        die();
    }else if(strlen($password) < 5 || strlen($password) >90){
        echo 'Недопустимая длина пароля'."</br>";
        echo "<a href='/login.php'>Назад</a>";
        die();
    }

    mysqli_query($mysqli,"INSERT INTO `sing_up` (`name`,`login`,`password`,`reg_date`)VALUES('$nik','$login','".md5($password)."','".time()."')");

    $res = mysqli_query($mysqli,"SELECT * FROM `sing_up` WHERE `login` = '$login' AND `password` = '".md5($password)."'");
    $user = mysqli_fetch_assoc($res);
    setcookie('user',$user['name'],time()+3600*24*3,"/");

    mysqli_close($mysqli);
    header('Location: /');
?>