<!-- 課題 ヘッダーの読み込み -->
<?php
get_header();
the_post();
?>

<div class="main-content">

    <div><?php the_post_thumbnail('category-thumb'); ?></div>
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>

</div>

<?php get_footer(); ?>