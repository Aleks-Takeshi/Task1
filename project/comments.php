<?php
    $comments = mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `pubdate` DESC");

    while( $comment = mysqli_fetch_assoc($comments) ) {
        ?>
            <div class="col-lg-8">
                <div class="comments__element">
                    <div class="comments__title">
                        <p><?php echo $comment['name']; ?><span><?php echo $comment['pubdate']; ?></span> </p>
                    </div>
                    <div class="comments__text">
                        <p><?php echo $comment['text']; ?></p>
                    </div>
                </div>
            </div>
        <?php
    }

    ?>