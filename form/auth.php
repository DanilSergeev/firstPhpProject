<?php
    require "../includ/db.php";
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

    $res = mysqli_query($mysqli,"SELECT * FROM `sing_up` WHERE `login` = '$login' AND `password` = '".md5($password)."'");
    $user = mysqli_fetch_assoc($res);
    if(count($user)==0){
        echo "Такого пользователя не существует"."<br/>";
        echo "<a href='/login.php'>Назад</a>";
        die();
    }

    setcookie('user',$user['name'],time()+3600*24,"/");

    mysqli_close($mysqli);
    header('Location: /');
?>