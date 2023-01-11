<?php require "blocks/header.php";?>
<main>
    <section class="news wrepper">
        <?php ?>
        <div class="cards">

        <?php while($art = mysqli_fetch_assoc($articles_q)){ ?>
                <div class="card">
                    <img src="./img/<?php echo $art['image'];?>.jpg" height="180px">
                    <h3><?php echo mb_substr($art['title'],0,13,'utf-8');?></h3>
                    <p><?php echo mb_substr($art['text'],0,120,'utf-8');?></p>
                    <a href="../articles.php?id=<?php echo $art['id']?>">Подробние</a>
                </div>
                <?php };?>

        </div>
    </section>
    <?php require "blocks/side.php";?>
</main>
<?php require "blocks/footer.php";?>