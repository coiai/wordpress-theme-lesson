<!-- 課題 ヘッダーの読み込み -->
<?php get_header(); ?>
<!--投稿ページを読み込む時に必要な関数 -->
<?php the_post();?>
<!-- サムネイル -->
<div><?php the_post_thumbnail('category-thumb'); ?></div>
<!-- タイトル -->
<h1><?php the_title(); ?></h1>
<!-- 本文 -->
<p><?php the_content(); ?></p>
<!-- フッターの読み込み -->
<?php get_footer(); ?>