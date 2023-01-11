<aside>
            <div class="side">
            <div class="video-side">
                 <!-- <video src="./img/videoplayback.mp4" loop width="348px" muted autoplay></video> -->
                 <img src="./img/videoplayback.gif" width="348px"></img>
           </div>
           <div class="container-side">
                <h2>Популярные статьи</h2>
                <hr>
                <div class="views">
                    <?php
                    while($art = mysqli_fetch_assoc( $articles_side)){?>
                        <div class="view">
                            <h3><?php echo $art['title'];?></h3>
                            <p><?php echo mb_substr($art['text'],0,120,'utf-8').'...';?></p>
                            <a href="../articles.php?id=<?php echo $art['id']?>">Подробние</a>
                            <hr>
                        </div>
                        <?php };?>
                </div>
        </div>
    </div>
        </aside>