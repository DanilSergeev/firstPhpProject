<?php
    require "config.php";
    $mysqli = new mysqli(
        $config['db']['server'],
        $config['db']['username'],
        $config['db']['password'],
        $config['db']['name']
);
$articles_id = $_GET['id'];

    $categories = mysqli_query($mysqli,"SELECT * FROM `articles_cat`");

    $articles = mysqli_query($mysqli,"SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 12");
    $articles_q = mysqli_query($mysqli,"SELECT * FROM `articles` WHERE `categorie_1` = $articles_id ORDER BY `id` DESC LIMIT 12");
    $articles_c = mysqli_query($mysqli,"SELECT * FROM `articles` WHERE `id` = $articles_id");
    $articles_side = mysqli_query($mysqli,"SELECT * FROM `articles` ORDER BY `views` DESC LIMIT 3");


?>