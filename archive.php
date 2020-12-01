<?php get_header() ?>

<div class="main-content">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>">

                <div class="post">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <div class="post__content">
                        <h2 class="post__title"><?php the_title(); ?></h2>
                        <?php echo "<p class='post__text'>" . get_the_excerpt() . "</p>" ; ?>
                        <a href="#"><?php the_tags(); ?></a><a href="#"><?php the_time(); ?></a>

                    </div>
                </div>

            </a>
        <?php endwhile; ?>
    <?php else: ?>
        <!-- 投稿データが取得できない場合の処理 -->
        <p>投稿がアリません</p>
    <?php endif; ?>
</div>

<?php get_footer()?>