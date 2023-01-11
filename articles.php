<?php require "blocks/header.php";
$art = mysqli_fetch_assoc($articles_c);
mysqli_query($mysqli,"UPDATE `articles` SET `views` = `views`+1 WHERE `id`=$articles_id");?>
    <main>
        <section class="news wrepper articles_c">
            <h1><? echo $art['title'];?></h1>
            <p class="text_art"><? echo $art['text'];?></p>
            <hr>
            <div class="art_date">
              <p>Дата публикации: <? echo date("Y.m.d H:i:s",$art['pubdate']);?></p>   <span>Количество просмотров: <?  echo $art['views'];?></span>
            </div>
           
            </section>
           
            <?php require "blocks/side.php";?>
    </main>

<?php require "blocks/footer.php";?>